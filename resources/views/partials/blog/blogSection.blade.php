<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($article as $item)
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset('storage/'.$item->img)}}" alt="">
                            <div class="post-date">
                                <h2>{{$item->jour}}</h2>
                                <h3>{{$item->mois}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$item->title}}</h2>
                            <div class="post-meta">
                                <a class="blogA" href="">{{$item->categories->categorie}}</a>
                                <a href="">Design, Inspiration</a>

                                <a href="">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis
                                ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat
                                augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
                            <a href="blogPost" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="blogPost" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="blog-post.html" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="blog-post.html" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
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
                        @foreach ($categorie as $item)
                            <li><a href="#">{{ $item->categorie }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tag as $item)
                            <li><a href="">{{$item->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
