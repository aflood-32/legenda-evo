<section class="le-mission bg-grey">
    <div class="container">
        <div class="row le-row">
            @foreach($block as $item)
                <div class="col-md-6">
                    <div class="mission-item">
                        <div class="section-title">{{$item['title']}}</div>
                        <p>{{$item['text']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
