<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use App\Http\Resources\Api\ContactResource;
use App\Http\Requests\Api\ContactStoreRequest;
use App\Mail\Admin\ContactSubmittedMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends ApiController
{
    public function __construct()
    {
        $this->model = Contact::class;
        $this->resource = ContactResource::class;
    }

    public function store(ContactStoreRequest $request)
    {
        $item = $this->model::create($request->validated());

        $recipients = config('notifications.admin_emails', []);
        if (! empty($recipients)) {
            try {
                Mail::to($recipients)->send(new ContactSubmittedMail($item));
            } catch (\Throwable $e) {
                report($e);
            }
        }

        return new $this->resource($item);
    }
}
