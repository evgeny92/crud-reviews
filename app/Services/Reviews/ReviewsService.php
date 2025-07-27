<?php

namespace App\Services\Reviews;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;

class ReviewsService
{
    public function index()
    {
        $view = 'front.pages.reviews.list';

        $reviews = Review::query('is_approved', 1)
            ->where('is_active', 1)
            ->orderByDesc('created_at')
            ->paginate(10);

        $meta = collect([]);
        $meta->meta_static = 'Reviews List';

        return view($view, get_defined_vars());
    }

    public function create()
    {
        $view = 'front.pages.reviews.create';

        $meta = collect([]);
        $meta->meta_static = 'Create Review';

        return view($view, get_defined_vars());
    }

    public function edit($review)
    {
        $view = 'front.pages.reviews.edit';

        $meta = collect([]);
        $meta->meta_static = 'Edit Review';

        return view($view, get_defined_vars());
    }

    public function store($request): RedirectResponse
    {
        try {

            $review = new Review();
            $review->name = $request->name;
            $review->phone = $request->phone;
            $review->email = $request->email;
            $review->comment = $request->comment;
            $review->user_ip = $request->ip();
            $review->save();

            return redirect()->route('reviews.index')
                ->with('success', 'You have successfully added review.');

        }catch (\Exception) {
            return redirect()->route('reviews.create')->with('error', 'Failed to add review. Please try again.');
        }

    }

    public function update($request, $review): RedirectResponse
    {
        try {
            $review->name = $request->name;
            $review->phone = $request->phone;
            $review->email = $request->email;
            $review->comment = $request->comment;
            $review->user_ip = $request->ip();
            $review->save();

            return redirect()->route('reviews.edit', $review->id)
                ->with('success', 'You have successfully edited review.');

        }catch (\Exception) {
            return redirect()->route('reviews.edit', $review->id)->with('error', 'Failed to edit review. Please try again.');
        }

    }

    public function show($review)
    {
        $view = 'front.pages.reviews.show';

        $meta = collect([]);
        $meta->meta_static = 'Show Review';

        return view($view, get_defined_vars());
    }

    public function destroy($review): RedirectResponse
    {
        $review->delete();

        return redirect()->route('reviews.index')
            ->with('success', 'Review deleted successfully');
    }
}
