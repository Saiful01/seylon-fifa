<!DOCTYPE html>
<html lang="en">
<head>
    <title>সিলন বিশ্বকাপ ফ্যামিলি মোমেন্ট</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" type="image/x-icon" href="/images/logo.jpeg">

    <meta property="og:image" content="{{ $thumbnail }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="{{ $fb_title }} ">
    <meta property="og:description"
          content="{{ $fb_sub_title }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        var app = angular.module('myApp', []);
        console.log("My App Initiated")
    </script>

    <style>
        .hero-area {
            padding: 50px 0px;
            background: #f7f7f7;
        }

        .navbar-area {
            background: #fff;
            border-bottom: 1px solid #dfdddd;
        }

        .carousel {
            position: relative;
            padding: 25px 0px;
        }

        .card {
            border: 1px solid;
            border-color: #cecece !important;
        }

        a {
            color: #35363a;
            text-decoration: none;
        }

        .news {
            background-color: #f1f1f1;
            padding: 35px 0px;
        }

        .copyright-area {
            padding: 25px 0px;
        }

        h2 {
            font-size: 20px;
        }

        .nav-item {
            font-weight: bold;
        }

        #loading {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.7;
            background-color: #fff;
            z-index: 99;
        }

        #loading-image {
            z-index: 100;
        }

        .ts-contact {
            background-color: #f8f8f8;
            padding: 25px 0px;
        }

        .quote-item {
            background-color: #fff;
            -webkit-box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
            box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
            padding: 50px;
        }

        .quote-item .content {
            margin-bottom: 30px;
        }

        .quote-item form .form-group {
            margin-bottom: 15px;
        }

        .quote-item form .form-group .form-control {
            height: 70px;
            color: #1b0238;
            -webkit-box-shadow: unset !important;
            box-shadow: unset !important;
            border: 1px solid #eee;
            background-color: transparent;
            -webkit-transition: .5s;
            transition: .5s;
            border-radius: 10px;
            padding: 0 0 0 15px;
            font-weight: 500;
        }

        .quote-item form .default-btn {
            border: none;
            width: 100%;
            cursor: pointer;
            margin-top: 10px;
            padding: 15px 30px;
            background-color: #FBAE16;
            color: white;
            border-radius: 5px;
        }

        .default-btn {
            border: none;
            width: 100%;
            cursor: pointer;
            padding: 6px 6px;
            background-color: #FBAE16;
            color: white;
            border-radius: 5px;
        }

        .badge {
            padding: 12px;
        }

        .who-we-are-content {
            padding: 50px;
        }

        .navbar-area {
            background: #fff;
            border-bottom: 1px solid #f1eded;
        }

        .reg-btn {
            padding: 20px;
        }

        .btn-danger {
            background-color: #EB242B;
        }

        .bg-danger {
            background-color: #EB242B !important;
        }

        .btn-vote-count {
            float: left !important;
        }

        .btn-vote {
            float: left !important;
        }

        .navbar-area img {
            width: 120px;

        }

        @media (max-width: 480px) {
            .navbar-area img {
                width: 80px;

            }
        }
    </style>


</head>
<body ng-app="myApp" ng-controller="myController" ng-init="allSelfieData()">
@include('sweetalert::alert')

<div id="loading">
    <img id="loading-image" src="/images/loader.gif" alt="Loading..."/>
</div>

<div class="navbar-area">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="/images/logo.jpeg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/">হোম </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">খবর </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#video">ভিডিও </a>
                    </li>

                </ul>
                <form class="d-flex">
                    <a href="#apply" class="btn btn-danger reg-btn">রেজিস্ট্রেশন</a>
                </form>
            </div>
        </div>
    </nav>

</div>
<section>
    <img src="/images/banner_1.jpg" alt="image" width="100%">

</section>
<section class="value-area ptb-100 bg-light" id="info">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-lg-8 col-12 mx-auto">
                <div class="who-we-are-content">

                    <h3>খেলা দেখার মুহূর্ত শেয়ার করে জিতুন আকর্ষণীয় পুরস্কার</h3>
                    <p>
                        ‘সিলন বিশ্বকাপ ফ্যামিলি মোমেন্ট’! পরিবার বা বন্ধুদের সঙ্গে বিশ্বকাপ খেলা দেখার এক্সাইটিং
                        মোমেন্টের ছবি বা সর্বোচ্চ ১০ সেকেন্ডের ভিডিও শেয়ার করে প্রতিদিন জিতে নিন আকর্ষণীয় পুরস্কার। সেই
                        সঙ্গে মেগা পুরস্কার হিসেবে রয়েছে স্মার্ট টিভি ও স্মার্টফোন জেতার সুযোগ।
                    </p>
                    <p>
                        ছবি বা ভিডিও পাঠানোর জন্য ভিজিট করুন seylonfamilymoment.pro. অথবা মেইল করুন
                        ayojon@prothomalo.com–এ।

                        ২১ নভেম্বর থেকে ১০ ডিসেম্বর ২০২২ পর্যন্ত প্রতিযোগিতায় অংশগ্রহণের সুযোগ থাকবে।

                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="value-area ptb-100 " id="rules">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8 mx-auto">
                <div class="who-we-are-content">

                    <span>সিলন বিশ্বকাপ ফ্যামিলি মোমেন্ট</span>
                    <h3>খেলা দেখার মুহূর্ত শেয়ার করে জিতুন আকর্ষণীয় পুরস্কার</h3>
                    <p>বাংলাদেশ দল হয়তো নেই, কিন্তু ফুটবল বিশ্বকাপ আমাদেরও। এই বিশ্বকাপ নিয়ে ঘরে-বাইরে উন্মাদনা। চলছে
                        পরিবার-স্বজনদের নিয়ে একসাথে ফুটবল ম্যাচ দেখার আয়োজন। সেই উপলক্ষটিকে আরও আনন্দময় করার সুযোগ করে
                        দিল সিলন ফ্যামিলি ব্লেন্ড চা। পরিবারের সবাইকে নিয়ে খেলা দেখার মুহূর্ত ক্যামেরাবন্দী করে জিতে
                        নিতে পারেন স্মার্ট টিভি, স্মার্ট ফোনসহ আকর্ষণীয় পুরস্কার। </p>
                    <p>
                        খেলা চলাকালীন মোবাইলের ক্যামেরায় জমা হয় অসংখ্য আনন্দময় মুহূর্ত। এবার এসেছে এসব দারুণ মুহূর্তের
                        ছবি অথবা শর্ট ভিডিও শেয়ার করে পুরস্কার জেতার সুযোগ। বিশ্বকাপ ফুটবল উপলক্ষে প্রথম আলো ডটকম ও সিলন
                        ফ্যামিলি ব্লেন্ড চা যৌথভাবে আয়োজন করেছে বিশেষ ক্যাম্পেইন ‘সিলন বিশ্বকাপ ফ্যামিলি মোমেন্ট’।
                        পরিবার বা বন্ধুদের সঙ্গে বিশ্বকাপ ফুটবল দেখার উন্মাদনা, উত্তেজনা, আবেগ বা আনন্দময় মুহূর্তটির ছবি
                        বা শর্ট ভিডিও পাঠাতে পারেন। ক্যাম্পেইন চলাকালীন প্রতিদিনের সেরা ছবি বা ভিডিওর জন্য প্রতিদিনই
                        থাকবে আকর্ষণীয় উপহার।
                    </p>
                    <p>
                        এ ছাড়াও প্রতিদিনের সেরা ছবি বা ভিডিওগুলোর মধ্যে থেকে পাঠকভোটের মাধ্যমে বিজয়ী তিনজন মেগা পুরস্কার
                        হিসেবে পাবেন একটি স্মার্ট টিভি এবং দুটি স্মার্ট ফোন।
                    </p>
                    <h6>‘সিলন বিশ্বকাপের ফ্যামিলি মোমেন্ট’ প্রতিযোগিতায় অংশগ্রহণের নিয়মাবলী</h6>
                    <ul class="who-we-are-list">


                        <li>
                            আপনার বন্ধু/পরিবারের সঙ্গে বিশ্বকাপ ফুটবল ম্যাচ উপভোগের মুহূর্তটি (ছবি/ভিডিও) পাঠাতে হবে।
                        </li>
                        <li>
                            ছবি/ভিডিওতে অবশ্যই চায়ের কাপ থাকতে হবে।
                        </li>
                        <li>
                            ছবি/ভিডিওটি হতে হবে আড়াআড়ি (ল্যান্ডস্কেপ)।
                        </li>
                        <li>
                            ছবি বা ভিডিওর ক্ষেত্রে ফাইল সাইজ হতে হবে সর্বোচ্চ ১০ মেগাবাইট।
                        </li>
                        <li>
                            ভিডিওর ক্ষেত্রে দৈর্ঘ্য হতে হবে সর্বোচ্চ ১০ সেকেণ্ড।
                        </li>
                        <li>
                            ছবি/ভিডিও পাঠানোর সময় অবশ্যই আপনার নাম, ফোন নাম্বার এবং ই–মেইল অ্যাড্রেস দিতে হবে।
                        </li>


                    </ul>
                    <p>ছবি/ভিডিও পাঠানোর জন্য ভিজিট করুন seylonfamilymoment.pro. অথবা মেইল করুন
                        ayojon@prothomalo.com–এ। </p>
                    <p>২১ নভেম্বর থেকে ১০ ডিসেম্বর ২০২২ পর্যন্ত প্রতিযোগিতায় অংশগ্রহণের সুযোগ থাকবে। </p>

                </div>
            </div>

        </div>
    </div>

</section>


{{--<div class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/images/numonic.png" style=" width: 80%"/>
            </div>
            <div class="col-md-6">

                <h1>সিলন ফিফা মোমেন্ট</h1>

                <p>বিশ্বকাপের মাসজুড়ে ‘সিলন ফিফা মোমেন্ট’-এ ফ্রেন্ডস বা ফ্যামিলির সাথে খেলা দেখার এক্সাইটিং মোমেন্টের
                    ছবি বা সর্বোচ্চ ১০ সেকেন্ডের ভিডিও শেয়ার করে প্রতিদিন জিতে নিন টিভি, মোবাইলসহ অসংখ্য পুরস্কার।</p>
            </div>
        </div>
    </div>
</div>--}}

<!-- Carousel Slider -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="500">

    <div class="container">

        <!-- Indicators/dots -->
        {{--<div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>--}}

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

            @if(count($sliders)>0)
                <div class="carousel-item active">
                    <img src="{{$sliders[0]->featured_image}}" alt="Los Angeles" class="d-block w-100">
                </div>
            @endif
            @foreach($sliders as $slider)
                <div class="carousel-item">
                    <img src="{{$slider->featured_image}}" alt="Los Angeles" class="d-block w-100">
                </div>
            @endforeach

            {{--<div class="carousel-item">
                <img src="ny.jpg" alt="New York" class="d-block w-100">
            </div>--}}
        </div>

        <!-- Left and right controls/icons -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
             <span class="carousel-control-prev-icon"></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
             <span class="carousel-control-next-icon"></span>
         </button>--}}
    </div>
</div>


<section class="ts-contact " style="background-color: #f1f1f1;">
    <div class="container">
        <div class="row mb-25">
            <div class="col-lg-12">
                <div class="elementor-widget-container">
                    <div class="row ">
                        @foreach($photos as $res)

                            <div class="col-lg-2 col-6 fadeInUp mt-4 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="300ms">
                                <div class="card p-2" style="border: 1px solid; border-color: #9f9f9f">
                                    <a href="{{$res->url}}" target="_blank">
                                        <div class="post-header mx-auto">
                                            <img src="{{$res->featured_image}}"
                                                 class="img-responsive mb-2" width="100%"
                                                 alt="--">

                                        </div>
                                    </a>


                                    <!-- post-body end -->
                                </div>
                                <!-- post end-->
                            </div>
                        @endforeach

                    </div> <!-- row end -->
                </div>
            </div><!-- col end-->

        </div>

    </div>

</section>

<section class="quote-area pb-100 apply bg-grey" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <img src="/images/nimonic.jpg" width="100%" height="100%">

            </div>
            <div class="col-lg-6">
                <div class="quote-item">
                    <div class="content">
                        <span>অংশগ্রহণ করুন </span>
                        <h3>নিচের ফরমে আপনার তথ্য দিয়ে ছবি অথবা ভিডিও আপলোড করুন।</h3>
                    </div>
                    <form action="/selfie-contest/submit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="নাম" required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone"
                                   placeholder="মুঠোফোন নম্বর" value="{{ old('phone') }}" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"
                                   placeholder="ইমেইল" value="{{ old('email') }}" required="">
                        </div>

                        {{--     <div class="form-group">
                                 <textarea class="form-control" name="address" value="" placeholder="ঠিকানা "></textarea>
                             </div>

                             <div class="form-group">


                                 <select class="form-control" name="class_group" id="class_group" value="">
                                     <option value="">বিভাগ বাছাই করো</option>
                                     <option value="৩–৯ বছর (ক বিভাগ)">৩–৯ বছর (ক বিভাগ)</option>
                                     <option value="১০–১২ বছর (খ বিভাগ)">১০–১২ বছর (খ বিভাগ)</option>

                                 </select>
                             </div>--}}
                        <div class="form-group">
                            <div class="row">
                                <label>ছবি/ভিডিও</label>
                                <div class="col-md-12 col-12 mt-2">

                                    <input class="form-control" type="file" name="image" required>


                                </div>
                            </div>
                        </div>
                        {{--      <div class="form-group">
                                  <div class="row">
                                      <label>Image</label>
                                      <div class="col-md-5 col-12">


                                          --}}{{--  <label for="img" class="btn btn-info"  onclick="clearImage()">এখানে ক্লিক করে ফটো পছন্দ করো</label>--}}{{--
                                          <input class="form-control" type="file" name="image" id="formFile"
                                                 onchange="preview()">
                                          --}}{{--   <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>--}}{{--

                                      </div>
                                      <div class="col-md-7 col-12">
                                          <img id="frame" src="" class="img-fluid"/>
                                      </div>
                                  </div>
                              </div>--}}
                        {{-- <div class="form-group">
                             <div class="row">
                                 <label>Video</label>
                                 <div class="col-md-5 col-12">


                                     <input type='file' name="video_file" id='videoUpload'/>


                                 </div>
                                 <div class="col-md-7 col-12">
                                     <video width="320" height="240" style="display:none" controls autoplay>
                                         Your browser does not support the video tag.
                                     </video>
                                 </div>
                             </div>
                         </div>--}}


                        <button type="submit" class="default-btn">
                            পাঠিয়ে দিন
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ts-contact" style="background-color: #f8f8f8;" id="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center">
                    <li class="nav-item" style="list-style: none">
                        <a href="#video">ছবি/ভিডিও</a>
                    </li>
                </h2>
                <div class="elementor-widget-container">
                    <div class="row ">

                        <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="300ms" ng-repeat="item in data_list">
                            <div class="card p-1">
                                <div class="post-header mx-auto">
                                    <div class="mb-2" ng-if="item.selfie.indexOf('png') !== -1">
                                        <img src="@{{ item.selfie }}" width="100%"
                                             height="350px">
                                    </div>
                                    <div class="mb-2" ng-if="item.selfie.indexOf('jpg') !== -1">
                                        <img src="@{{ item.selfie }}" width="100%"
                                             height="350px">
                                    </div>
                                    <div class="mb-2" ng-if="item.selfie.indexOf('jpeg') !== -1">
                                        <img src="@{{ item.selfie }}" width="100%"
                                             height="350px">
                                    </div>
                                    <div class="embed-responsive embed-responsive-21by9"
                                         ng-if="item.selfie.indexOf('mp4') !== -1">
                                        <iframe class="embed-responsive-item" ng-src="@{{ item.selfie }}" width="100%"
                                                height="350px"></iframe>
                                    </div>
                                    <div class="embed-responsive embed-responsive-21by9"
                                         ng-if="item.selfie.indexOf('MOV') !== -1">
                                        <iframe class="embed-responsive-item" ng-src="@{{ item.selfie }}" width="100%"
                                                height="350px"></iframe>
                                    </div>
                                    <div class="embed-responsive embed-responsive-21by9"
                                         ng-if="item.selfie.indexOf('MKV') !== -1">
                                        <iframe class="embed-responsive-item" ng-src="@{{ item.selfie }}" width="100%"
                                                height="350px"></iframe>
                                    </div>


                                </div>
                                <div class="post-body mx-auto">
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-8 col-8">
                                                <!-- Button to Open the Modal -->
                                                <button class="default-btn btn-vote"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#myModal@{{ item.id }}">
                                                    ভোট দিন
                                                </button>

                                                <!-- The Modal -->
                                                <div class="modal" id="myModal@{{ item.id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    {{--  <div class="col-lg-6">
                                                                          <div class="quote-image"></div>
                                                                      </div>--}}
                                                                    <div class="col-lg-12 mx-auto">
                                                                        <div class="quote-item">
                                                                            <div class="content">

                                                                                <h3>আপনার ভোট দিন ।</h3>
                                                                            </div>
                                                                            <form action="/vote" method="post">
                                                                                @csrf

                                                                                <input type="hidden"
                                                                                       name="selfie_id"
                                                                                       ng-value="@{{ item.id }}">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           name="name"
                                                                                           placeholder="নাম" required>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           name="phone"
                                                                                           placeholder="মুঠোফোন নম্বর"
                                                                                           required>
                                                                                </div>

                                                                                <button type="submit"
                                                                                        class="default-btn">
                                                                                    পাঠিয়ে দিন
                                                                                </button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Close
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-4">
                                                <span
                                                    class="badge bg-danger btn-vote-count">ভোট : @{{ item.votes }}</span>
                                            </div>


                                        </div>


                                    </div>

                                </div>
                                <!-- post-body end -->
                            </div>
                        </div>


                    </div> <!-- row end -->

                </div>
            </div><!-- col end-->

        </div>

    </div>

</section>

@if(count($videos)>0)

    <section class="ts-contact" style="background-color: #f8f8f8;" id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        <li class="nav-item" style="list-style: none">
                            <a href="#video">ভিডিও</a>
                        </li>
                    </h2>
                    <div class="elementor-widget-container">
                        <div class="row ">

                            @foreach($videos as $res)

                                <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-1">
                                        <div class="post-header mx-auto">
                                            <iframe width="100%" height="230"
                                                    src="{{$res->video_link}}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>


                                        </div>
                                        <div class="post-body mx-auto">
                                            <div class="post-meta">

                                                <h2>{{$res->video_title}}</h2>

                                            </div>

                                        </div>
                                        <!-- post-body end -->
                                    </div>
                                    <!-- post end-->
                                </div>
                            @endforeach

                        </div> <!-- row end -->

                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>
@endif

@if(count($videos1)>0)

    <section class="ts-contact" style="background-color: #f8f8f8;" id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        <li class="nav-item" style="list-style: none">
                            <a href="#video">ভিডিও</a>
                        </li>
                    </h2>
                    <div class="elementor-widget-container">
                        <div class="row ">
                            @foreach($videos1 as $res)

                                <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-1">
                                        <div class="post-header mx-auto">
                                            <iframe width="100%" height="230"
                                                    src="{{$res->video_link}}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>


                                        </div>
                                        <div class="post-body mx-auto">
                                            <div class="post-meta">

                                                <h2>{{$res->video_title}}</h2>

                                            </div>

                                        </div>
                                        <!-- post-body end -->
                                    </div>
                                    <!-- post end-->
                                </div>
                            @endforeach

                        </div> <!-- row end -->

                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>
@endif

@if(count($news)>0)
    <section class="news" style="background-color: #f1f1f1;" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        <li class="nav-item" style="list-style: none">
                            <a href="#status">খবর </a>
                        </li>
                    </h2>
                    <div class="elementor-widget-container">
                        <div class="row ">
                            @foreach($news as $res)

                                <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-3" style="border: 1px solid; border-color: #9f9f9f">
                                        <div class="post-header mx-auto">
                                            <img src="{{$res->featured_image}}" height="225px"
                                                 class="img-responsive mb-2" width="100%"
                                                 alt="--">

                                        </div>
                                        <div class="post-body mx-auto">
                                            <div class="post-meta">
                                                <a class="" href="{{$res->news_link}}" target="_blank">
                                                    <h2>{{$res->title}}</h2>
                                                </a>
                                            </div>

                                            <div class="post-footer " style="cursor: pointer; color:#0d51a0 ">
                                                <a href="{{$res->news_link}}" target="_blank">
                                                    Continue <i class="icon icon-arrow-right"></i></a>

                                            </div>


                                        </div>
                                        <!-- post-body end -->
                                    </div>
                                    <!-- post end-->
                                </div>
                            @endforeach

                        </div> <!-- row end -->
                        {{--    <section class="ts-contact" id="news2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="elementor-widget-container">
                                                <div class="row ">
                                                    @foreach($news2 as $res)

                                                        <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp"
                                                             data-wow-duration="1.5s" data-wow-delay="300ms">
                                                            <div class="card p-3"
                                                                 style="border: 1px solid; border-color: #9f9f9f">
                                                                <div class="post-header mx-auto">
                                                                    <img src="{{$res->featured_image}}" height="225px"
                                                                         class="img-responsive mb-2" width="100%"
                                                                         alt="--">

                                                                </div>
                                                                <div class="post-body mx-auto">
                                                                    <div class="post-meta">
                                                                        <a class="" href="{{$res->news_link}}"
                                                                           target="_blank">
                                                                            <h2>{{$res->title}}</h2>
                                                                        </a>
                                                                    </div>

                                                                    <div class="post-footer "
                                                                         style="cursor: pointer; color:#0d51a0 ">
                                                                        <a href="{{$res->news_link}}" target="_blank">
                                                                            Continue <i
                                                                                class="icon icon-arrow-right"></i></a>

                                                                    </div>


                                                                </div>
                                                                <!-- post-body end -->
                                                            </div>
                                                            <!-- post end-->
                                                        </div>
                                                    @endforeach

                                                </div> <!-- row end -->
                                            </div>
                                        </div><!-- col end-->

                                    </div>

                                </div>

                            </section>
                            @if(count($news2) >0)
                                <div class="row">
                                    <div class="mx-auto mt-2" id="newsbtn">
                                        <button onclick="moreNews()" class="btn  btn-primary ">More</button>
                                    </div>
                                </div>
                            @endif--}}


                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>
@endif

<div class="container bg-grey" id="history" style="margin-bottom: 25px; margin-top: 25px; display: block">
    <a href="#"> <img src="/images/footer_banner.jpg" width="100%"></a>
</div>

<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row">
                <div class="col-md-10 col-12 mx-auto">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="/images/palologoblack.png" class="footer-logo" style="height: 75px">

                        </div>
                        <div class="col-md-6 col-12">
                            <p class="footer-p">
                                কপিরাইট ©
                                <a href="https://www.prothomalo.com/" target="_blank">
                                    প্রথম আলো ডিজিটাল
                                </a>
                                <br>
                                প্রগতি ইনস্যুরেন্স ভবন, ২০-২১ কারওয়ান বাজার, ঢাকা ১২১৫। <br>ফোন: ৮১৮০০৭৮-৮১</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>


    app.controller('myController', function ($scope, $http) {
        $scope.allSelfieData = function () {

            $http.get("/all-selfie-data")
                .then(function (response) {
                    $scope.data_list = response.data.results;
                    console.log($scope.data_list)


                })
        };
        $scope.voteSubmit = function () {
            console.log('ok')
            console.log($scope.name)
            console.log($scope.phone)
            return

            if ($scope.name == null || $scope.phone == null) {
                Swal.fire({
                    icon: 'error',
                    text: 'All fields are Required',
                })
                return;
            }


            let url = "/vote";
            let params = {
                'name': $scope.name,
                'phone': $scope.phone,
                'selfie_id': $scope.selfie_id,
            };
            $http.post(url, params).then(function success(response) {
                return "ok";


                if (response.data.status == 200) {

                    Swal.fire({
                        icon: 'success',
                        text: response.data.message,
                    });
                    $('#closemodal').click(function () {
                        $('#modalwindow').modal('hide');
                    });


                }
                if (response.data.status == 400) {
                    Swal.fire({
                        icon: 'error',
                        text: response.data.message,
                    });
                    $('#closemodal').click(function () {
                        $('#modalwindow').modal('hide');
                    });


                }
                console.log(response.data);

            });
            $scope.allSelfieData();

        }


    });


</script>
<script>
    $(window).on('load', function () {
        $('#loading').hide();
    })

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }

    document.getElementById("videoUpload").onchange = function (event) {
        let file = event.target.files[0];
        let blobURL = URL.createObjectURL(file);
        document.querySelector("video").style.display = 'block';
        document.querySelector("video").src = blobURL;
    }

</script>

</body>
</html>
