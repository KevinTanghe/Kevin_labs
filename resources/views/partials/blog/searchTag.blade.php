<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @if ($tags->articles->isEmpty())
                <h4>Il y a pas d'articles  avec ce tag</h4>
                @endif
                @foreach ($tags->articles as $article)
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
                <!-- Pagination -->
                <div class="page-pagination">
                    {{-- {{ $tags->->links() }} --}}
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
                        @foreach ($test as $item)
                            <li><a href="/tag/{{$item->id}}">{{$item->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
