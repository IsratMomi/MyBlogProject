<!DOCTYPE html>
<!--[if lt IE 9 ]> <html class="lt_ie9"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->


<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

   @include('front.includes.css')

    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<div class="main-container">


    <!-- Header Section -->
   <!-- Header Section /- -->
    @include('front.includes.header')
    <main class="site-main">

     @yield('content')

    </main>

    <!-- Footer Section -->
    @include('front.includes.footer')

</div>


@include('front.includes.script')

@if(Session::has('message'))

    <script>
        $(document).ready(function () {
            toastr.success('{{Session::get('message')}}');

        })
    </script>

@endif
</body>
</html>
