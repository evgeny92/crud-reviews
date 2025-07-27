@extends('front.app')
@section('meta')
    <x-meta :meta="$meta"/>
@stop

@section('container')
    <section class="pt-4">
        <div class="container px-lg-5">


            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Thank you!</h1>
                    <p class="fs-4">Thank you for choosing our business! We would like to know how you liked our
                        service. We would be grateful if you left a review on our page</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('reviews.index') }}">Go to reviews</a>
                </div>
            </div>

            <div class="mt-5 text-center"><h2 class="h2">Latest reviews</h2>
                <p class="lead">
                    These are the latest added reviews from our customers.
                </p>
            </div>

            <div class="m-5">
                @if($reviews->isNotEmpty())
                    @foreach($reviews as $review)
                        @include('front.pages.templates.review')
                    @endforeach
                @endif
            </div>

        </div>
    </section>
@stop
