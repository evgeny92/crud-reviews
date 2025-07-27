@extends('front.app')
@section('meta')
    <x-meta :meta="$meta"/>
@stop

@section('container')
    <section class="pt-4">
        <div class="container px-lg-5">

            <div class="mt-5 text-center"><h2 class="h2">Latest reviews</h2>
                <p class="lead">
                    These are the latest added reviews from our customers.
                </p>
            </div>

            <div class="mt-5 text-center">
                <a class="btn btn-success btn-lg" href="{{ route('reviews.create') }}">Add new review</a>
            </div>

            <div class="m-5">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif

                @if($reviews->isNotEmpty())
                    @foreach($reviews as $review)
                        @include('front.pages.templates.review')
                    @endforeach
                @endif
            </div>

            @if($reviews->isNotEmpty())
                    {{ $reviews->links() }}
            @endif

        </div>
    </section>
@stop
