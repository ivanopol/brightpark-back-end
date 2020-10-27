@if (count($breadcrumbs))

    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach ($breadcrumbs as $key => $breadcrumb)

            @if ($breadcrumb->url)
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{ $breadcrumb->url }}" itemprop="item"><span itemprop="name">{{ $breadcrumb->title }}</span></a>
                    <meta itemprop="position" content="{{$key + 1}}" />
                </li>
            @endif

        @endforeach
    </ul>

@endif
