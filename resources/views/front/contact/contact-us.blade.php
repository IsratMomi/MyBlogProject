@extends('front.master')

@section('title')
    কন্টাক্ট - আস

@endsection
@section('content')
    <div class="container-fluid no-padding page-banner contact-banner" style="background-image:url(assets/images/contact-banner.jpg)" >

        <!-- Container -->
        <div class="container">
            <h3>কন্টাক্ট - আস</h3>
            <ol class="breadcrumb">
                <li><a href="{{route('/')}}">হোম</a></li>
                <li class="active">কন্টাক্ট আস</li>
            </ol>
        </div><!-- Container /- -->
    </div>
<main>
    <div class="container-fluid no-left-padding no-right-padding contact-section">
        <!-- Container -->
        <div class="container">
            <!-- Contact Map -->
            <div id="map-canvas-contact" class="map-canvas" data-lat="40.729261" data-lng="-73.989230" data-string="09, Downtown St, USA" data-zoom="10"></div>
            <!-- Contact Map /- -->
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-6 contact-form">
                    <h3><span>Get in</span> Touch with Us</h3>
                    <form class="row" action="{{route('new-message')}}" method="post">
                        @csrf
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="input_name" required="" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" id="input_email" required="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea class="form-control" placeholder="Message" name="message" id="contact_message"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 send-btn">
                            <input type="submit" value="SEND MESSAGE"  />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="alert-msg" id="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-6 contact-detail">
                    <h3><span>Contact</span> Details</h3>
                    <p>Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long.</p>
                    <span><i class="icon icon-Phone2"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></span>
                    <span><i class="icon icon-Mail"></i><a href="mailto:example@example.com">admin@maxmagazine.com</a></span>
                    <span><i class="icon icon-Pointer"></i> 09, Downtown St, USA</span>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection