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
                @foreach($content as $item)
                    <h1></h1>
                    <div class="services-about-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-about-title"><span>{{$loop->iteration}}</span>{{ $item['pagetitle']}}</div>
                                <a href="@makeUrl($item['id'])" class="services-about-link">Подробнее об услуге</a>
                            </div>
                            <div class="col-md-6">
                                <div class="services-about-text">
                                    @if($item['service-text'])
                                        {!! $item['service-text'] !!}
                                    @else
                                        <h4>Раздел в разработке</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                                <div class="step-icon"><img src='{{$item['icon']}}'
                                                            alt="work-img {{ $loop->iteration }}"></div>
                            </div>
                            <div class="step-title">{{$item['text']}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


@endsection
