@extends('front.app')
@section('meta')
    <x-meta :meta="$meta"/>
@stop

@section('container')
    <section class="pt-4">
        <div class="container px-lg-5">

            <div class="mt-5 text-center"><h2 class="h2">Show Review</h2>
                <p class="lead">
                    Here you can see your review
                </p>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <span>Review added - </span>
                    <span>{{ $review->created_at }}</span>
                </div>

                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <p>{{ $review->comment }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">{{ $review->name }}</cite>
                        </figcaption>
                    </figure>
                    <div class="d-md-flex justify-content-end">
                        <a href="{{ route('reviews.index', $review->id) }}" class="btn btn-secondary me-md-2"
                           type="button">Back to reviews</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary me-md-2"
                           type="button">Edit</a>

                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@stop
