@extends('front.master')

@section('title')
    সিংগেল - ব্লগ

@endsection
@section('content')
    <div class="container-fluid no-padding page-banner" style="background-image:url({{asset('/')}}assets/images/page-banner.jpg)">
    <!-- Container -->
    <div class="container">
        <h3>BLOG SINGLE</h3>
        <ol class="breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li class="active">BLOG SINGLE</li>
        </ol>
    </div><!-- Container /- -->
</div>

    <main class="site-main page_spacing">

        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row blog-single">
                <!-- Content Area -->
                <div class="col-md-9 col-sm-8 content-area content_space">
                    <article class="type-post">
                        <div class="entry-cover">
                            <a href="#"><img src="{{asset($blog->image)}}" alt="Blog" /></a>
                        </div>
                        <div class="entry-header">
                            <h3 class="entry-title">{{$blog->title}}</h3>
                            <div class="entry-meta">
                                <div class="post-date"><a href="#" title="May 22, 2016">May 22, 2016</a></div>
                                <div class="byline">By : <a href="#" title="Simon">{{$blog->authorName}}</a></div>
                                <div class="post-comment"><a href="#" title="07"><i class="fa fa-commenting-o"></i>{{$totalCommentCount}}</a></div>
                                <div class="post-like"><a href="#" title="23"><i class="fa fa-eye"></i>{{$blog->totalRead}}</a></div>
                            </div>
                        </div>
                        <div class="entry-content">
                            <p>{{$blog->description}}</p>

                        </div>

                        <div class="social-share">
                            <p>Share It</p>
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- Comment Section -->
                    <div class="comment-section">
                        <div class="section-heading">
                            <h3>Comments</h3>
                        </div>
                        <ul class="media-list">
                            @foreach($comments as $comment)
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" title="Peter Hein"><img src="{{asset('/')}}assets/images/avtar-1.jpg" alt="comment"></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content">
                                        <h4 class="media-heading">{{$comment->name}}</h4>
                                        <span>{{$comment->created_at}}</span>
                                        <p>{{$comment->comment}} </p>
                                        <a href="#" title="Reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- Comment Section /- -->
                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="section-heading">
                            <h3>Leave Your Comments Here</h3>
                        </div>
                        <form class="row" action="{{route('new-comment')}}" method="post">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
                            <div class="form-group col-md-6">
                                <input type="text" required="" name="name" placeholder="Name *" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" required="" name="email" placeholder="EMail" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea placeholder="Comments *" rows="3" name="comment" class="form-control"></textarea>
                            </div>
                            <input type="submit" title="POST COMMENT" value="POST COMMENT">
                        </form>
                    </div><!-- Comment Form /- -->
                </div><!-- Content Area /- -->

                <!-- Widget Area -->
                <div class="col-md-3 col-sm-4 widget-area widget_space">

                    <!-- Widget: Search -->
                    <aside class="widget widget_search">
                        <form method="get" class="searchform" action="#">
                            <div class="input-group">
                                <input name="s" placeholder="Search..," class="form-control" required="" type="text"/>
                                <span class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
									</span>
                            </div>
                        </form>
                    </aside><!-- Widget: Search /- -->

                    <!-- Widget: Categories -->
                    <aside class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($categories as $category)
                            <li class="cat-item"><a href="#" title="Business">{{$category->name}}</a></li>

                            @endforeach
                        </ul>
                    </aside><!-- Widget: Categories /- -->

                    <!-- Widget: Latest Posts -->
                    <!-- Widget: Latest Posts /- -->

                    <!-- Widget: Add -->
                    <!-- Widget: Add /- -->

                    <!-- Widget: Recent Comments -->
                    <aside class="widget widget_recent_comments">
                        <h3 class="widget-title">Recent Comments</h3>
                        <ul id="recentcomments">
                            <li class="recentcomments">
                                <span class="comment-author-link"><i class="fa fa-comments-o"></i> JOHN DOE </span>
                                <a href="#">Till the one day when the lady met this fellow and they knew it was much more than a hunch.</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link"><i class="fa fa-comments-o"></i> MIKE HURRY </span>
                                <a href="#">Till the one day when the lady met this fellow and they knew it was much more than a hunch.</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link"><i class="fa fa-comments-o"></i> DANIAL SMITH </span>
                                <a href="#">Till the one day when the lady met this fellow and they knew it was much more than a hunch.</a>
                            </li>
                        </ul>
                    </aside><!-- Widget: Recent Comments /- -->

                    <!-- Widget: Tag Cloud -->
                    <aside class="widget widget_tag_cloud">
                        <h3 class="widget-title">POPULAR TAGES</h3>
                        <div class="tagcloud">
                            <a href="#" title="TRAVEL">TRAVEL</a>
                            <a href="#" title="TECHNOLOGY">TECHNOLOGY</a>
                            <a href="#" title="ENTERTAINMENT">ENTERTAINMENT</a>
                            <a href="#" title="SPORTS">SPORTS</a>
                            <a href="#" title="LIFESTYLE">LIFESTYLE</a>
                            <a href="#" title="BUSINESS">BUSINESS</a>
                            <a href="#" title="DESTINATION">DESTINATION</a>
                            <a href="#" title="HEALTH">HEALTH</a>
                            <a href="#" title="NATURE">NATURE</a>
                        </div>
                    </aside><!-- Widget: Tag Cloud /- -->

                </div><!-- Widget Area /- -->
            </div><!-- Row /- -->
        </div><!-- Container /- -->

    </main>

@endsection