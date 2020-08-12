@extends('layout.base')

@section('content')
    @include('partials.pb.pb', ['pagebuilder' => $pagebuilder])
    <section class="le-services">
        <div class="container">
            <div class="services-list">
                @foreach($menu['1']['children'] as $item)
                    <div class="services-item">
                        <div class="services-img">
                            <div class="services-icon"><img src="{{$item['icon']}}" alt=""></div>
                        </div>
                        <div class="services-text">
                            <h4><a href="@makeUrl($item['id'])">{{$item['pagetitle']}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
