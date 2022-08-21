
<!-- Sidebar
                ============================================= -->

<div class="sidebar col-lg-3">
    <div class="sidebar-widgets-wrap">
        <div class="widget clearfix">
            <div class="tabs mb-0 clearfix" id="sidebar-tabs">
                <ul class="tab-nav clearfix">
                    <li><a href="#tabs-1">Popular</a></li>
                    <li><a href="#tabs-2">Recent</a></li>
                </ul>

                <div class="tab-container">
                    <div class="tab-content clearfix" id="tabs-1">
                        <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                            @foreach($popularPosts as $post)
                            <div class="entry col-12">
                                <div class="grid-inner row no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="{{asset('storage/'.$post->image)}}"><img class="rounded-circle" src="{{asset('storage/'.$post->image)}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-line-eye"></i>{{$post->reads}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-content clearfix" id="tabs-2">
                        <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                            @foreach($recentPosts as $post)
                            <div class="entry col-12">
                                <div class="grid-inner row no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="{{asset('storage/'.$post->image)}}"><img class="rounded-circle" src="{{asset('storage/'.$post->image)}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li>{{$post->created_at->format('d M y')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="widget clearfix">

            <h4>Tag Cloud</h4>
            <div class="tagcloud">
                <a href="#">general</a>
                <a href="#">videos</a>
                <a href="#">music</a>
                <a href="#">media</a>
                <a href="#">photography</a>
                <a href="#">parallax</a>
                <a href="#">ecommerce</a>
                <a href="#">terms</a>
                <a href="#">coupons</a>
                <a href="#">modern</a>
            </div>

        </div>

    </div>

</div><!-- .sidebar end -->