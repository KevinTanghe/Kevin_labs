<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$title[0]->title}}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($serviceLeft as $item)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$item->icon}}"></i>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($serviceRight as $item)
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="{{$item->icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                @endforeach
                <!-- feature item -->
            </div>
        </div>
        <div class="text-center mt100">
            <a href="#sectionBlog" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->