@if ($paginator->hasPages())
    <nav aria-label="Paginate">
        <div class="clearfix">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="btn btn-primary float-left">← Posts recientes</span>
            @else
                <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Posts recientes</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}" rel="next">Posts anteriores →</a>
            @else
                <span class="btn btn-primary float-right">Posts anteriores →</span>
            @endif
        </div>
    </nav>
@endif
