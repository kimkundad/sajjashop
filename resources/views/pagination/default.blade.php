@if ($paginator->lastPage() > 1)
<div class="ps-pagination">
		<ul class="pagination">
            <li><a href="{{ $paginator->url(1) }}"></a>First Page</li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
			<li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a href="{{ $paginator->url($i) }}" >{{ $i }}</a></li>
			@endfor
			<li><a href="{{ $paginator->url($paginator->currentPage()+1) }}">Next Page</a></li>
		</ul>
</div>
@endif



