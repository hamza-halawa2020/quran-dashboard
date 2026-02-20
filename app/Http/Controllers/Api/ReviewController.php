<?php

namespace App\Http\Controllers\Api;

use App\Models\Review;
use App\Http\Resources\Api\ReviewResource;
use App\Http\Requests\Api\ReviewStoreRequest;

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

        return new $this->resource($item);
    }
}
