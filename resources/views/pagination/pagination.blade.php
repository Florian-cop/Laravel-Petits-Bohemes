@if ($paginator->hasPages())
    <ul class="pagination">
        @if($paginator->onFirstPage())
            <li class="page-item"><a href="{{$paginator->nextPageUrl()}}" class="page-link" rel="next">Suivant >></a></li>
        @elseif($paginator->onLastPage())
            <li class="page-item"><a href="{{$paginator->previousPageUrl()}}" class="page-link" rel="prev"><< Précédent</a></li>
        @else
            <li class="page-item"><a href="{{$paginator->previousPageUrl()}}" class="page-link" rel="prev"><< Précédent</a></li>
            <li class="page-item"><a href="{{$paginator->nextPageUrl()}}" class="page-link" rel="next">Suivant >></a></li>
        @endif
    </ul>
@endif