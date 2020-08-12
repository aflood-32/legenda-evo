<div class="promo-slider owl-carousel">
    @foreach($block as $item)
        <div class="promo-item" style="background-image: url({{$item['image']}})">
            <div class="container">
                <div class="promo-wr">
                    <div class="promo-title">{{$item['title']}}</div>
                    <div class="promo-text">
                        <p>{{$item['text']}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
