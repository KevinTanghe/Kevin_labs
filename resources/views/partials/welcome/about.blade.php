<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($serviceIntro as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$item->icon}}"></i>
                            </div>
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!! App\Helpers\myReplace::black($title[0]->title) !!}</h2>
            </div>
            <div class="row">
                @foreach ($aboutContent as $item)
                    <div class="col-md-6">
                        <p>{{ $item->content }}</p>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt60">
                <a href="#team" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{ asset('storage/' . $video[0]->img) }}" alt="">
                        <a href="{{ $video[0]->url }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->
