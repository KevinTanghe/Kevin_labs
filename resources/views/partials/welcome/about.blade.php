<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($serviceHome as $item)
                    
                @endforeach
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-12">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{{$title[0]->title}}</h2>
            </div>
            <div class="row">
                @foreach ($aboutContent as $item)
                    <div class="col-md-6">
                        <p>{{$item->content}}</p>
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
                        <img src="{{asset('storage/'.$video[0]->img)}}" alt="">
                        <a href="{{$video[0]->url}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->