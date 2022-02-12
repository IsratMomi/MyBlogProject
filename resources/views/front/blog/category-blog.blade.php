@extends('front.master')

@section('title')
    সিংগেল - ব্লগ

@endsection
@section('content')
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-image:url({{asset('/')}}assets/images/page-banner.jpg)">
        <!-- Container -->
        <div class="container">
            <h3>BLOG</h3>
            <ol class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">BLOG</li>
            </ol>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <main class="site-main page_spacing">

        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row blog-list">
                <!-- Content Area -->
                <div class="col-md-9 col-sm-6 content-area content_space">

                    <!-- Latest Technology -->
                    <div class="latest-technology content-right-padding">
                        <div class="section-header section-header2">
                            <h6>নতুন</h6>
                            <h3>{{$category->name}}</h3>
                        </div>
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="type-post">

                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <div class="entry-cover"><a href="#"><img src="{{asset($blog->image)}}" alt="Technology" /></a></div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <div class="entry-content">
                                        <h3 class="entry-title"><a href="#">{{$blog->title}}</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">May 12, 2016</a></span>
                                            <span>By : <a href="#">{{$blog->authorName}}</a></span>
                                            <span><a href="#"><i class="fa fa-commenting-o"></i> 17</a></span>
                                            <span><a href="#"><i class="fa fa-eye"></i>{{$blog->totalRead}}</a></span>
                                        </div>
                                        <p>{{$blog->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div><!-- Latest Technology /- -->

                    <!-- Video Block -->
                    <div class="video-block">
                        <div class="type-post video-format">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/121674646?color=ffffff&amp;portrait=0"></iframe>
                            </div>
                            <h3 class="entry-title"><a href="#">The Light of Life</a></h3>
                            <div class="post-meta">
                                <span class="post-date"><a href="#">June 18th, 2016</a></span>
                                <span class="byline">By  <a href="#">John Sina</a></span>
                            </div>
                            <div class="entry-content">
                                <p>Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. It's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight.</p>
                                <a href="#" title="Read More">read more</a>
                            </div>
                        </div>
                    </div><!-- Video Block /- -->

                    <!-- Style Block -->
                    <div class="style-block">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-6 box-style">
                                <div class="box-style1">
                                    <div class="entry-cover"><a href="#"><img src="images/style-block5.jpg" alt="Style" /></a></div>
                                    <div class="entry-content">
                                        <span>Style</span>
                                        <h3 class="entry-title"><a href="#">Samantha Bee says her show isn't influential.</a></h3>
                                        <a href="#">></a>
                                    </div>
                                    <div class="post-meta">
                                        <a href="#">12 Comments</a>
                                        <a href="#">78 Views</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-6 box-style">
                                <div class="box-style2">
                                    <div class="entry-cover"><a href="#"><img src="images/style-block6.jpg" alt="Style" /></a></div>
                                    <div class="entry-content">
                                        <span>Style</span>
                                        <h3 class="entry-title"><a href="#">Isla gets personal after Sunrise snub</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">May 21, 2016</a></span>
                                            <span>By : <a href="#">Elliot</a></span>
                                            <span><a href="#">6 Comments</a></span>
                                        </div>
                                        <p>Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers.</p>
                                        <a href="#" title="View Post">VIEW POST</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Style Block /- -->

                </div><!-- Content Area /- -->

                <!-- Widget Area -->
                <div class="col-md-3 col-sm-6 widget-area widget_space">

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
                    <aside class="widget widget_latestposts">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="latest-content">
                            <a href="#" title="Recent Posts"><i><img src="images/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
                            <h5><a title="The paradox of modern Vietnam" href="#">The paradox of modern Vietnam</a></h5>
                            <span><a href="#">TRAVEL</a> <a href="#">MAY 1, 2016</a></span>
                        </div>
                        <div class="latest-content">
                            <a href="#" title="Recent Posts"><i><img src="images/wd-rcnt-post2.jpg" class="wp-post-image" alt="blog-1"></i></a>
                            <h5><a title="BHP Billiton's Samarco costs top $3 billion" href="#">BHP Billiton's Samarco costs top $3 billion</a></h5>
                            <span><a href="#">BUSINESS</a> <a href="#">MAY 1, 2016</a></span>
                        </div>
                        <div class="latest-content">
                            <a href="#" title="Recent Posts"><i><img src="images/wd-rcnt-post3.jpg" class="wp-post-image" alt="blog-1"></i></a>
                            <h5><a title="I'm a goose too, says Dimma over Dusty" href="#">I'm a goose too, says Dimma over Dusty</a></h5>
                            <span><a href="#">SPORTS</a> <a href="#">MAY 1, 2016</a></span>
                        </div>
                        <div class="latest-content">
                            <a href="#" title="Recent Posts"><i><img src="images/wd-rcnt-post4.jpg" class="wp-post-image" alt="blog-1"></i></a>
                            <h5><a title="The Tradtional Console Life Cycle is Dying" href="#">The Tradtional Console Life Cycle is Dying</a></h5>
                            <span><a href="#">TECHNOLOGY</a> <a href="#">MAY 1, 2016</a></span>
                        </div>
                    </aside><!-- Widget: Latest Posts /- -->

                    <!-- Widget: Add -->
                    <aside class="widget widget_add">
                        <h3 class="widget-title">ADVERTISEMENT</h3>
                        <div class="add-block">
                            <a href="#"><img src="images/wd-add.jpg" alt="Add" /></a>
                        </div>
                    </aside><!-- Widget: Add /- -->

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