<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\reviews\StoreReviewRequest;
use App\Http\Requests\reviews\UpdateReviewRequest;
use App\Models\Review;
use App\Services\Reviews\ReviewsService;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function __construct(public ReviewsService $reviewsService) {}

    public function index()
    {
        return $this->reviewsService->index();
    }

    public function create()
    {
        return $this->reviewsService->create();
    }

    public function store(StoreReviewRequest $request): RedirectResponse
    {
        return $this->reviewsService->store($request);
    }

    public function edit(Review $review)
    {
        return $this->reviewsService->edit($review);
    }

    public function update(UpdateReviewRequest $request, Review $review): RedirectResponse
    {
        return $this->reviewsService->update($request, $review);
    }

    public function show(Review $review)
    {
        return $this->reviewsService->show($review);
    }

    public function destroy(Review $review): RedirectResponse
    {
        return $this->reviewsService->destroy($review);
    }


}
