<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($articles as $article)
                <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset('storage/'.$article->img)}}" alt="">
                            <div class="post-date">
                                <h2>{{$article->jour}}</h2>
                                <h3>{{$article->mois}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <div class="post-meta">
                                <a class="blog" href="/categorie/{{$article->categories->id}}">{{$article->categories->categorie}}</a>
                                <a class="blog"></a>
                                @foreach ($article->tags as $tag)
                                    <a class="tag" href="/tag/{{$tag->id}}">{{$tag->tag}}</a>
                                @endforeach
                                <a class="blog" href="/blog/{{$article->id}}">{{count($article->comments)}} Commentaires</a>
                            </div>
                            <p>{{Str::limit($article->content, 100)}}</p>
                            <a href="/blog/{{$article->id}}" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="post-item">
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
                </div> --}}
                <!-- Pagination -->
                <div class="page-pagination">
                    {{ $articles->links() }}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="{{ route('search') }}" method="GET" class="search-form">
                        <input type="text" name="search" required placeholder="Search">
                        <button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categorie as $item)
                            <li><a href="/categorie/{{$item->id}}">{{ $item->categorie }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                            <li><a href="/tag/{{$tag->id}}">{{$tag->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
