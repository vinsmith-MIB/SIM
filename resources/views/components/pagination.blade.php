<!-- Pagination -->
<nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
    <ul class="pagination">
        <!-- Tombol Sebelumnya -->
        <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <!-- Nomor Halaman -->
        @foreach ($products as $product)
            <li class="page-item {{ $product->currentPage() == $products->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $product->url }}">{{ $product->currentPage() }}</a>
            </li>
        @endforeach

        <!-- Tombol Selanjutnya -->
        <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<!-- Pagination -->