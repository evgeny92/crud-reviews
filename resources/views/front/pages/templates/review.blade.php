<div class="card mt-3">
    <div class="card-header">
        <span>Review added - </span>
        <span>{{ $review->review_human_date }}</span>
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
        @if(!Route::is('/'))
            <div class="d-md-flex justify-content-end">
                <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary me-md-2"
                   type="button">Edit</a>
                <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-warning me-md-2"
                   type="button">Show</a>
                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </div>
        @endif
    </div>
</div>
