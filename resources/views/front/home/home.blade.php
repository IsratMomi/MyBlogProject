@extends('front.master')
@section('title')
    Home - Magazine

@endsection

@section('content')

<div id="home-revslider" class="slider-section container-fluid no-padding">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="home-slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li>
                    <img src="{{asset('/')}}assets/images/slide1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-layer-0"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-basealign="slide"
                         data-height="full"
                         data-hoffset="['0','0','0','0']"
                         data-responsive="off"
                         data-responsive_offset="off"
                         data-start="0"
                         data-transform_idle="o:1;"
                         data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="opacity:0;s:500;s:500;"
                         data-voffset="['0','0','0','0']"
                         data-whitespace="nowrap"
                         data-width="full"
                         style="z-index: 5;background-color:rgba(34, 34, 34, 0.549);">
                    </div>
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['240','170','130','90']"
                         data-fontsize="['46','40','32','20']"
                         data-lineheight="['64','50','38','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap; letter-spacing: 1.38px; color:#fff; font-weight: 600;  font-family: 'Poppins', sans-serif;">The World is a Book and <br> those Who do <br> Not Travel Read Only one Page
                    </div>
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-2"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['430','320','250','180']"
                         data-fontsize="['20','20','20','16']"
                         data-lineheight="['64','64','54','34']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap; letter-spacing: 0.6px; color:#c7c6c6; font-weight: 600; font-family: 'Poppins', sans-serif;">By : DANIAL SMITH	26 MAY, 2016
                    </div>
                    <div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-3"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['520','410','330','245']"
                         data-fontsize="['14','14','14','12']"
                         data-lineheight="['30','30','30','30']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
                         data-style_hover="c:#fff;bg:#ffb609;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","offset":"0px"}]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         style="z-index: 10; padding:8px 24px 7px; border-radius: 0; border: 2px solid #ffb609; letter-spacing:0.56px; color: #fff; background-color: transparent; font-weight: 600; font-family: 'Poppins', sans-serif; text-transform:uppercase; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Read More
                    </div>
                </li>

                <li>
                    <img src="{{asset('/')}}assets/images/slide2.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-layer-4"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-basealign="slide"
                         data-height="full"
                         data-hoffset="['0','0','0','0']"
                         data-responsive="off"
                         data-responsive_offset="off"
                         data-start="0"
                         data-transform_idle="o:1;"
                         data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="opacity:0;s:500;s:500;"
                         data-voffset="['0','0','0','0']"
                         data-whitespace="nowrap"
                         data-width="full"
                         style="z-index: 5;background-color:rgba(34, 34, 34, 0.549);">
                    </div>
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-5"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['240','170','130','90']"
                         data-fontsize="['46','40','32','20']"
                         data-lineheight="['64','50','38','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[-105%];s:1000;e:Power4.slideInUp;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap; letter-spacing: 1.38px; color:#fff; font-weight: 600;  font-family: 'Poppins', sans-serif;">The World is a Book and <br> those Who do <br> Not Travel Read Only one Page
                    </div>
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-6"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['430','320','250','180']"
                         data-fontsize="['20','20','20','16']"
                         data-lineheight="['64','64','54','34']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap; letter-spacing: 0.6px; color:#c7c6c6; font-weight: 600; font-family: 'Poppins', sans-serif;">By : DANIAL SMITH	26 MAY, 2016
                    </div>
                    <div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-7"
                         data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']"
                         data-y="['top','top','top','top']" data-voffset="['520','410','330','245']"
                         data-fontsize="['14','14','14','12']"
                         data-lineheight="['30','30','30','30']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;"
                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"
                         data-style_hover="c:#fff;bg:#ffb609;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","offset":"0px"}]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         style="z-index: 10; padding:8px 24px; border-radius: 0; border: 2px solid #ffb609; letter-spacing:0.56px; color: #fff; background-color: transparent; font-weight: 600; font-family: 'Poppins', sans-serif; text-transform:uppercase; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Read More
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- Slider Section 1 -->

<!-- Recent Reviews -->
<div class="container-fluid no-left-padding no-right-padding recent-reviews">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h6>UPDATED</h6>
            <h3>RECENT REVIEWS</h3>
        </div><!-- Section Header /- -->
        <!-- Row -->
        <div class="row">
            <!-- Recent Reviews Left -->
            <div class="col-md-7 col-sm-6 col-xs-6 rcnt-review-left">
                <div class="type-post">
                    <div class="entry-cover">
                        <a href="#"><img src="{{asset($blog->image)}}" alt="Recent" height="100%" width="100%"/></a>
                        <div class="rcnt-category"><a href="#">{{$blog->category->name}}</a></div>
                    </div>
                    <h3 class="entry-title"><a href="#">{{$blog->title}}</a></h3>
                    <div class="post-meta">
                        <div class="post-time"><a href="#">1 hour ago</a></div>
                        <div class="post-commnet"><a href="#"><i class="fa fa-commenting-o"></i> 24</a></div>
                    </div>
                    <div class="entry-content">
                        <p>{{$blog->description}}</p>
                    </div>
                </div>
            </div><!-- Recent Reviews Left /- -->
            <!-- Recent Reviews Thumb -->
            <div class="col-md-5 col-sm-6 col-xs-6 rcnt-review-right">
                @foreach($blogs as $blog)
                <div class="rcnt-review-thumb">

                    <div class="entry-cover">
                        <a href="{{route('blog-single',['id' => $blog->id])}}"><img src="{{asset($blog->image)}}" alt="Reviews" style="height: 70%" width="60%"/></a>

                    </div>
                    <h3 class="entry-title"><a href="{{route('blog-single',['id' => $blog->id])}}"><b>{{$blog->title}}</b></a></h3>
                    <h4 class="entry-title"><a href="#">ক্যাটাগরি : {{$blog->category->name}}</a></h4>
                    <div class="post-meta">
                        <div class="post-time"><a href="#">1 hour ago</a></div>

                        <div class="post-commnet"><a href="#"><i class="fa fa-commenting-o"></i>N/A</a></div>

                    </div>

                </div>
                @endforeach


            </div><!-- Recent Reviews Thumb /- -->
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Recent Reviews /- -->



<!-- Container -->
<div class="container">
    <!-- Row -->
    <div class="row">
        <!-- Content Area -->
        <div class="col-md-9 col-sm-7 content-area content_space">
            <!-- Life Style Block -->
            <div class="lifestyle-bolck">
                <h4 class="block-title">LIFESTYLE</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-3 thumb-block no-padding">
                        <div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/lifestyle-thumb1.jpg" alt="Life Style" /></a></div>
                            <div class="post-date"><a href="#">Apirl 21,2016</a></div>
                            <h3 class="entry-title"><a href="#">New deal as Pathways goes under</a></h3>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/lifestyle-thumb2.jpg" alt="Life Style" /></a></div>
                            <div class="post-date"><a href="#">Apirl 21,2016</a></div>
                            <h3 class="entry-title"><a href="#">Alzheimer's research offers hope</a></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-6 big-block">
                        <div class="life-block-big">
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/lifestyle-big.jpg" alt="Life Style" /></a></div>
                            <div class="entry-content">
                                <div class="post-date"><a href="#">Apirl 11,2016</a></div>
                                <h3 class="entry-title"><a href="#">The Scientific Push To Declassify Transgender A Mental Disorder</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-3 thumb-block no-padding">
                        <div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/lifestyle-thumb3.jpg" alt="Life Style" /></a></div>
                            <div class="post-date"><a href="#">Apirl 21,2016</a></div>
                            <h3 class="entry-title"><a href="#">Activity tracker not quite fit</a></h3>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/lifestyle-thumb4.jpg" alt="Life Style" /></a></div>
                            <div class="post-date"><a href="#">Apirl 21,2016</a></div>
                            <h3 class="entry-title"><a href="#">The best advice you'll ever get</a></h3>
                        </div>
                    </div>
                </div>
            </div><!-- Life Style Block /- -->
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
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/style-block1.jpg" alt="Style" /></a></div>
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
                            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/style-block2.jpg" alt="Style" /></a></div>
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
            <!-- Add Block -->
            {{--<!-- Add Block /- -->--}}
        </div><!-- Content Area /- -->

        <!-- Widget Area -->
        <div class="col-md-3 col-sm-5 widget-area widget_space">

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
                    <li class="cat-item"><a href="#" title="Business">Business</a></li>
                    <li class="cat-item"><a href="#" title="Lifestyle">Lifestyle</a></li>
                    <li class="cat-item"><a href="#" title="Travel">Travel</a></li>
                    <li class="cat-item"><a href="#" title="Sports">Sports</a></li>
                    <li class="cat-item"><a href="#" title="Entertainment">Entertainment</a></li>
                    <li class="cat-item"><a href="#" title="Food and Health">Food and Health</a></li>
                    <li class="cat-item"><a href="#" title="Nature">Nature</a></li>
                </ul>
            </aside><!-- Widget: Categories /- -->

            <!-- Widget: Latest Posts -->
            <aside id="widget_latestposts" class="widget widget_latestposts">
                <h3 class="widget-title">Recent Posts</h3>
                <div class="latest-content">
                    <a href="#" title="Recent Posts"><i><img src="{{asset('/')}}assets/images/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
                    <h5><a title="The paradox of modern Vietnam" href="#">The paradox of modern Vietnam</a></h5>
                    <span><a href="#">TRAVEL</a> <a href="#">MAY 1, 2016</a></span>
                </div>
                <div class="latest-content">
                    <a href="#" title="Recent Posts"><i><img src="{{asset('/')}}assets/images/wd-rcnt-post2.jpg" class="wp-post-image" alt="blog-1"></i></a>
                    <h5><a title="BHP Billiton's Samarco costs top $3 billion" href="#">BHP Billiton's Samarco costs top $3 billion</a></h5>
                    <span><a href="#">BUSINESS</a> <a href="#">MAY 1, 2016</a></span>
                </div>
                <div class="latest-content">
                    <a href="#" title="Recent Posts"><i><img src="{{asset('/')}}assets/images/wd-rcnt-post3.jpg" class="wp-post-image" alt="blog-1"></i></a>
                    <h5><a title="I'm a goose too, says Dimma over Dusty" href="#">I'm a goose too, says Dimma over Dusty</a></h5>
                    <span><a href="#">SPORTS</a> <a href="#">MAY 1, 2016</a></span>
                </div>
                <div class="latest-content">
                    <a href="#" title="Recent Posts"><i><img src="{{asset('/')}}assets/images/wd-rcnt-post4.jpg" class="wp-post-image" alt="blog-1"></i></a>
                    <h5><a title="The Tradtional Console Life Cycle is Dying" href="#">The Tradtional Console Life Cycle is Dying</a></h5>
                    <span><a href="#">TECHNOLOGY</a> <a href="#">MAY 1, 2016</a></span>
                </div>
            </aside><!-- Widget: Latest Posts /- -->

            <!-- Widget: Archives -->
            <aside class="widget widget_archive">
                <h3 class="widget-title">archives</h3>
                <ul>
                    <li><a href="#">February </a> &nbsp; (16)</li>
                    <li><a href="#">March </a> &nbsp; (07)</li>
                    <li><a href="#">May </a> &nbsp; (12)</li>
                    <li><a href="#">June </a> &nbsp; (15)</li>
                    <li><a href="#">July </a> &nbsp; (05)</li>
                </ul>
            </aside><!-- Widget: Archives /- -->

            <!-- Widget: Add -->
            <aside class="widget widget_add">

            </aside><!-- Widget: Add /- -->

            <!-- Widget: Recent Comments -->
            <aside id="recent-comments" class="widget widget_recent_comments">
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
            <aside id="tag_cloud" class="widget widget_tag_cloud">
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


<!-- Events Section -->
<div class="container-fluid no-padding events-section">
    <!-- Events Box -->
    <div class="col-md-3 col-sm-6 col-xs-6 no-padding events-box">
        <div class="type-post">
            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/events1.jpg" alt="Events" /></a></div>
            <div class="entry-header">
                <h3 class="entry-title"><a href="#">Google announces add-ons for Docs and Sheets</a></h3>
                <div class="post-meta">
                    <span><a href="#">May 12, 2016</a></span>
                    <span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 115</a></span>
                    <span><a href="#"><i class="fa fa-eye"></i>&nbsp; 746</a></span>
                </div>
            </div>
        </div>
    </div><!-- Events Box /- -->
    <!-- Events Box -->
    <div class="col-md-3 col-sm-6 col-xs-6 no-padding events-box">
        <div class="type-post">
            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/events2.jpg" alt="Events" /></a></div>
            <div class="entry-header">
                <h3 class="entry-title"><a href="#">Hackers could sniff out your passwords if you're typing nearby</a></h3>
                <div class="post-meta">
                    <span><a href="#">May 11, 2016</a></span>
                    <span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 11</a></span>
                    <span><a href="#"><i class="fa fa-eye"></i>&nbsp; 46</a></span>
                </div>
            </div>
        </div>
    </div><!-- Events Box /- -->
    <!-- Events Box -->
    <div class="col-md-3 col-sm-6 col-xs-6 no-padding events-box">
        <div class="type-post">
            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/events3.jpg" alt="Events" /></a></div>
            <div class="entry-header">
                <h3 class="entry-title"><a href="#">​You'll soon be able to ramble through an Oculus VR version of Minecraft</a></h3>
                <div class="post-meta">
                    <span><a href="#">May 11, 2016</a></span>
                    <span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 11</a></span>
                    <span><a href="#"><i class="fa fa-eye"></i>&nbsp; 46</a></span>
                </div>
            </div>
        </div>
    </div><!-- Events Box /- -->
    <!-- Events Box -->
    <div class="col-md-3 col-sm-6 col-xs-6 no-padding events-box">
        <div class="type-post">
            <div class="entry-cover"><a href="#"><img src="{{asset('/')}}assets/images/events2.jpg" alt="Events" /></a></div>
            <div class="entry-header">
                <h3 class="entry-title"><a href="#">Hackers could sniff out your passwords if you're typing nearby</a></h3>
                <div class="post-meta">
                    <span><a href="#">May 11, 2016</a></span>
                    <span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 11</a></span>
                    <span><a href="#"><i class="fa fa-eye"></i>&nbsp; 46</a></span>
                </div>
            </div>
        </div>
    </div><!-- Events Box /- -->
</div>

@endsection