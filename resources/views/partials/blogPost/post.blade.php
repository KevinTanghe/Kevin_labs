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
                            <a class="blog"
                                href="/categorie/{{ $articles->categories->id }}">{{ $articles->categories->categorie }}</a>
                            <a class="blog"></a>
                            @foreach ($articles->tags as $tag)
                                <a class="tag" href="/tag/{{ $tag->id }}">{{ $tag->tag }}</a>
                            @endforeach
                            <a class="blog" href="">{{ count($articles->comments) }} Commentaires</a>
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
                            <h2>{{ $articles->user->lastname }} {{ $articles->user->firstname }}
                                <span>Author</span>
                            </h2>
                            <p>{{ $articles->user->description }} </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments</h2>
                        <ul class="comment-list">
                            @foreach ($articles->comments as $comment)
                                <li>
                                    <div class="avatar">
                                        <img src="{{ asset('storage/' . $comment->photo) }}" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3>{{ $comment->name }} | {{ $comment->date }} | Reply</h3>
                                        <p>{{ $comment->content }} </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="/comment" method="POST">
                                @csrf
                                @if (Auth::check())
                                    <div class="row">
                                        <div class="col-sm-6 d-none">
                                            <input type="text"
                                                value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}"
                                                name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6 d-none">
                                            <input type="text" value="{{ Auth::user()->email }}" name="mail"
                                                placeholder="Your email">
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
                                @else
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
                                @endif
                            </form>
                        </div>
                    </div>
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
                            <li><a href="/categorie/{{ $item->id }}">{{ $item->categorie }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                            <li><a href="/tag/{{ $tag->id }}">{{ $tag->tag }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
