@extends('layouts.applayout')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>--}}
    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image" style="background-image:url({{url('images/slides/slide-1.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            Find Your<br>
                                            <span class="color-b">Dream </span> Property
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image:url({{url('images/slides/slide-2.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            Find your<br>
                                            <span class="color-b">perfect </span> home land
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image:url({{url('images/slides/slide-3.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            Find Your<br>
                                            <span class="color-b">Dream </span> Property
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= Latest sale Properties Section ======= -->
        <section class="section-property section-t4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Sale Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ url('/properties', 'sale') }}">All Sale Property
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sale-property-carousel" class="owl-carousel owl-theme">
                @if(isset($sale_properties))
                    @foreach($sale_properties as $property)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:250px !important;">
                            <div class="img-box-a">
                                @foreach($property->images as $image)
                                    @if(($image->is_main) == 1)
                                    <img src="{{asset($image->image)}}" alt="" class="img-a img-fluid" style="height:250px !important;">
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">{{ $property->post_town }}
                                                <br /> {{ $property->post_city }}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | £{{ $property->price }}</span>
                                        </div>
                                        <a href="{{ route('property.view', $property->id ) }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{ $property-> internal_area }} {{ $property-> area_unit }}</span>
                                            </li>
                                            {{--<li>
                                                <figure class="figure">
                                                    <img src="{{ asset('svgs/bed.svg') }}" class="figure-img img-fluid rounded" alt="figure" width="3" height="1">
                                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                                </figure>
                                            </li>--}}
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{ $property-> no_of_bedrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{ $property-> no_of_bathrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">halls</h4>
                                                <span>{{ $property-> no_of_halls }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-1.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">206 Mount
                                                <br /> road Jaffna</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 49 million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-2.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">157 West
                                                <br /> Central Park</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 55 million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-7.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">245 John hill
                                                <br />Park Vavuniya 49</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Rent | 25,000 Rs per day</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-8.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Montal
                                                <br /> Road Mannar</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 36 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </section><!-- End Latest sale Properties Section -->

        <!-- ======= Latest rent Properties Section ======= -->
        <section class="section-property section-t4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Rent Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ url('/properties', 'let') }}">All Rent Property
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rent-property-carousel" class="owl-carousel owl-theme">
                @if(isset($rent_properties))
                    @foreach($rent_properties as $property)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:250px !important;">
                            <div class="img-box-a">
                                @foreach($property->images as $image)
                                    @if(($image->is_main) == 1)
                                    <img src="{{asset($image->image)}}" alt="" class="img-a img-fluid" style="height:250px !important;">
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">{{ $property->post_town }}
                                                <br /> {{ $property->post_city }}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">£{{ $property->price }} | {{ $property->rent_frequency }}</span>
                                        </div>
                                        <a href="{{ route('property.view', $property->id ) }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{ $property-> internal_area }} {{ $property-> area_unit }}</span>
                                            </li>
                                            {{--<li>
                                                <figure class="figure">
                                                    <img src="{{ asset('svgs/bed.svg') }}" class="figure-img img-fluid rounded" alt="figure" width="3" height="1">
                                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                                </figure>
                                            </li>--}}
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{ $property-> no_of_bedrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{ $property-> no_of_bathrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">halls</h4>
                                                <span>{{ $property-> no_of_halls }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-1.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">206 Mount
                                                <br /> road Jaffna</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 49 million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-2.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">157 West
                                                <br /> Central Park</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 55 million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-7.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">245 John hill
                                                <br />Park Vavuniya 49</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Rent | 25,000 Rs per day</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow" style="height:500px !important;">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-8.jpg') }}" alt="" class="img-a img-fluid"
                                    style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Montal
                                                <br /> Road Mannar</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 36 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </section><!-- End Latest rent Properties Section -->


        <!-- ======= Testimonials Section ======= -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">What Our Fantastic Clients Say</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="testimonial-carousel" class="owl-carousel owl-arrow" style="padding-top: 0rem !important;">
                    <div class="carousel-item-a">
                        <div class="testimonials-box">
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    Great environment, professional and nice people.
                                    They care about their clients and train their agents frequently so they are always
                                    updated with what’s going on in the market. I recommend REAL PROPERTY to anyone
                                    looking to do any Real Estate transaction.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="{{ asset('images/people/p1.jpg') }}" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Rock</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-a">
                        <div class="testimonials-box">
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    The best real estate company I have ever dealt with.
                                    Very professional, experienced and helpful agents and brokers. Highly recommend.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="{{ asset('images/people/p2.jpg') }}" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Emma</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-a">
                        <div class="testimonials-box">
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    The best real estate company I have ever dealt with.
                                    Very professional, experienced and helpful agents and brokers. Highly recommend.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="{{ asset('images/people/p3.jpg') }}" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Alane</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-a">
                        <div class="testimonials-box">
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    Great environment, professional and nice people.
                                    They care about their clients and train their agents frequently so they are always
                                    updated with what’s going on in the market. I recommend REAL PROPERTY to anyone
                                    looking to do any Real Estate transaction.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="{{ asset('images/people/p4.jpg') }}" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Amy</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main>
@endsection
