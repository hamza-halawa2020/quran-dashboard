<?php

namespace App\Http\Controllers\Api;

use App\Models\Review;
use App\Http\Resources\Api\ReviewResource;
use App\Http\Requests\Api\ReviewStoreRequest;
use App\Mail\Admin\ReviewSubmittedMail;
use Illuminate\Support\Facades\Mail;

class ReviewController extends ApiController
{
    public function __construct()
    {
        $this->model = Review::class;
        $this->resource = ReviewResource::class;
    }

    public function store(ReviewStoreRequest $request)
    {
        $item = $this->model::create($request->validated());

        $recipients = config('notifications.admin_emails', []);
        if (! empty($recipients)) {
            try {
                Mail::to($recipients)->send(new ReviewSubmittedMail($item));
            } catch (\Throwable $e) {
                report($e);
            }
        }

        return new $this->resource($item);
    }
}
