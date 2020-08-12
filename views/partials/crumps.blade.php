<ul class="le-breadcrumbs">
    @foreach($crumbs as $item)
        @if($documentObject['id'] == $item['id'])
            <li>{{ $item['pagetitle'] }}</li>
        @else
            <li><a href="{{ $item['url'] }}">{{ $item['pagetitle'] }}</a></li>
        @endif
    @endforeach
</ul>
