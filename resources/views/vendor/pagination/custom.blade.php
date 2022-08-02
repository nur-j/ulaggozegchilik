@if ($paginator->hasPages())
    <nav>
        <ul class="page-numbers">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="icofont-thin-left"></i>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

@if ($paginator->hasPages())
    <nav>
        <ul class="page-numbers">
            {{-- Previous  --}}
        </ul>
    </nav>
@endif




<nav>
    <ul class="page-numbers">
      <li>
        <span class="page-number current">1</span>
      </li>
      <li>
        <a class="page-number" href="#">2</a>
      </li>
      <li>
        <a class="page-number" href="#">3</a>
      </li>
      <li>
        <a class="page-number" href="#">4</a>
      </li>
      <li>
        <a class="page-number next" href="#">
          <i class="icofont-thin-right"></i>
        </a>
      </li>
    </ul>
  </nav>