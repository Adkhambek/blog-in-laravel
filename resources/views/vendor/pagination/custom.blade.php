@if ($paginator->hasPages())
<div class="pagination">
    <ul class="pagination-list">
        @if (!$paginator->onFirstPage())
            <li class="pagination-item">
                <a href="{{$paginator->previousPageUrl()}}" class="pagination-link prev">
                    <span class="fas fa-chevron-left"></span>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if(is_string($element))
                    <li class="pagination-item">
                        <span class="pagination-link">...</span>
                    </li>
            @endif
            @if(is_array($element))
                @foreach($element as $page =>$url)
                    @if($page == $paginator->currentPage())
                            <li class="pagination-item">
                                <a href="{{$url}}" class="pagination-link active">{{$page}}</a>
                            </li>
                    @else
                            <li class="pagination-item">
                                <a href="{{$url}}" class="pagination-link">{{$page}}</a>
                            </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
                <li class="pagination-item">
                    <a href="#" class="pagination-link next">
                        <span class="fas fa-chevron-right"></span>
                    </a>
                </li>
        @endif
    </ul>
</div>
@endif
