<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset('storage/'.$logo[0]->img)}}" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousel as $item)
            <div class="item  hero-item" data-bg="{{asset('storage/carousel/' .$item->img)}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->