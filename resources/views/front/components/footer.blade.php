<footer class="py-5 bg-dark{{ Route::is('reviews.create') || request()->segment(3) == 'show' ? ' fixed-bottom' : '' }}">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Reviews CRUD {{ date('Y') }}</p></div>
</footer>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
