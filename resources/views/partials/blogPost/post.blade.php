<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{ asset('storage/' . $articles->img) }}" alt="">
                        <div class="post-date">
                            <h2>{{ $articles->jour }}</h2>
                            <h3>{{ $articles->mois }}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{ $articles->title }}</h2>
                        <div class="post-meta">
                            <a class="blog" href="">{{ $articles->categories->categorie }}</a>
                            <a class="blog"></a>
                            @foreach ($articles->tags as $tag)
                                <a class="tag" href="">{{ $tag->tag }}</a>
                            @endforeach
                            <a class="blog" href="">2 Comments</a>
                        </div>
                        <p>{{ $articles->content }}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            {{-- {{dd($articles->user->photo)}} --}}
                            <img src="{{ asset('storage/' . $articles->user->photo) }}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{ $articles->user->lastname }} {{ $articles->user->firstname }} <span>Author</span>
                            </h2>
                            <p>{{ $articles->user->description }} </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments (2)</h2>
                        <ul class="comment-list">
                            @foreach ($articles->comments as $comment)
                                <li>
                                    <div class="avatar">
                                        <img src="{{asset('storage/'.$comment->photo)}}" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3>{{$comment->name}} | {{$comment->date}} | Reply</h3>
                                        <p>{{$comment->content}} </p>
                                    </div>
                                </li>
                            @endforeach
                            <li>
                                <div class="avatar">
                                    <img src="{{ asset('img/avatar/01.jpg') }}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin
                                        ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget
                                        tristique. </p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="{{ asset('img/avatar/02.jpg') }}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin
                                        ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget
                                        tristique. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="/comment" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="mail" placeholder="Your email">
                                    </div>
                                    <div>
                                        <input id="inputComment" type="text" name="article_id"
                                            value="{{ $articles->id }}">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="content" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
