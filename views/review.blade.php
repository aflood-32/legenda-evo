@extends('layout.base')

@section('content')
    <section class="inner-top">
        <div class="container">
            @include('partials.crumps', ['crumbs'=>$crumbs, 'documentObject'=>$documentObject])
            <h1>{{$documentObject['pagetitle']}}</h1>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <h3>{{$documentObject['longtitle']}}</h3>
            <div class="le-devider"></div>
        </div>
    </section>

    @include('partials.pb.pb', ['pagebuilder' => $pagebuilder])


@endsection
