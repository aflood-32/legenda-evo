@extends('layout.base')

@section('content')

    <section class="inner-top">
        <div class="container">
            @include('partials.crumps', ['crumbs'=>$crumbs, 'documentObject'=>$documentObject])
            <h1>{{$documentObject['pagetitle']}}</h1>

            @if(isset($about_menu))
                <ul class="dop-menu">
                    @foreach($about_menu as $item)
                        <li>
                            <a href="@makeUrl($item['id'])">{{$item['pagetitle']}}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="services-about-list">
                <div class="services-about-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="services-about-text">
                                @if($service_text)
                                    {!! $service_text !!}
                                @else
                                    <h2 style="text-align: center">Раздел в разработке</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($tiles) > 0)
        <section class="le-step  bg-grey">
            <div class="container">
                <div class="section-title">{{ $tiles['title'] }}</div>
                <div class="step-list">
                    @foreach($tiles['items'] as $item)
                        <div class="step-item">
                            <div class="step-circle">
                                <div class="step-number"><span>{{ $loop->iteration }}</span></div>
                                <div class="step-icon"><img src='{{$item['icon']}}' alt="work-img {{ $loop->iteration }}"></div>
                            </div>
                            <div class="step-title">{{$item['text']}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
