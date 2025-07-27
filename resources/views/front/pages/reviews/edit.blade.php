@extends('front.app')
@section('meta')
    <x-meta :meta="$meta"/>
@stop

@section('container')
    <section class="pt-4">
        <div class="container px-lg-5">

            <div class="mt-5 text-center"><h2 class="h2">Edit Review</h2>
                <p class="lead">
                    Here you can edit your review
                </p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif

            <form class="form mb-5" method="POST" action="{{ route('reviews.update', $review->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $review->name }}">
                                        @error('name')
                                        <div class="alert alert-danger mt-1 py-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" id="phone" value="{{ $review->phone }}">
                                        @error('phone')
                                        <div class="alert alert-danger mt-1 py-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $review->email }}">
                                        @error('email')
                                        <div class="alert alert-danger mt-1 py-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="3">{{ $review->comment }}</textarea>
                                        @error('comment')
                                        <div class="alert alert-danger mt-1 py-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-success" type="submit">Add review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </section>

@stop
