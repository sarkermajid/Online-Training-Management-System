@extends('website.master')


@section('title')
    Best Online Training System In Bangladesh
@endsection

@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}website/img/s1.jpg" class="w-100" height="500" alt="">
{{--                <div class="carousel-caption">--}}
{{--                    <h3>PHP With Laravel Framework</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis ea harum id illo iste laudantium magnam pariatur possimus voluptas!</p>--}}
{{--                    <a href="" class="btn btn-dark px-5">Read More</a>--}}
{{--                </div>--}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/img/s2.jpg" class="w-100" height="500" alt="">
{{--                <div class="carousel-caption">--}}
{{--                    <h3>Mobile App Development</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis ea harum id illo iste laudantium magnam pariatur possimus voluptas!</p>--}}
{{--                    <a href="" class="btn btn-dark px-5">Read More</a>--}}
{{--                </div>--}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}website/img/s3.jpg" class="w-100" height="500" alt="">
{{--                <div class="carousel-caption">--}}
{{--                    <h3>Professional Digital Marketing</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis ea harum id illo iste laudantium magnam pariatur possimus voluptas!</p>--}}
{{--                    <a href="" class="btn btn-dark px-5">Read More</a>--}}
{{--                </div>--}}
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Offer Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($offer_courses as $offer_course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{ asset($offer_course->offer_image) }}" alt="" class="">
                            <div class="card-body">
                                <a href="{{ route('training.detail',['id'=>$offer_course->id]) }}" class="text-decoration-none text-dark"><h4>{{ $offer_course->title }}</h4></a>
                                <p class="mb-0">Price: {{ $offer_course->offer_fee }} BDT</p>
                                <del class="mb-0 text-danger">Regular Price: {{ $offer_course->fee }} BDT</del>
                                <p class="mb-0">Last Date: {{ $offer_course->offer_date }}</p>
                                <p class="mb-0">Author: {{ $offer_course->teacher->name }}</p>
                                <hr/>
                                <a href="{{ route('training.detail',['id'=>$offer_course->id]) }}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($recent_courses as $recent_course)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset($recent_course->image) }}" alt="" class="">
                        <div class="card-body">
                            <a href="{{ route('training.detail',['id'=>$recent_course->id]) }}" class="text-decoration-none text-dark"><h4>{{ $recent_course->title }}</h4></a>
                            <p class="mb-0">Price: {{ $recent_course->fee }} BDT</p>
                            <p class="mb-0">Starting Date: {{ $recent_course->starting_date }}</p>
                            <p class="mb-0">Author: {{ $recent_course->teacher->name }}</p>
                            <hr/>
                            <a href="{{ route('training.detail',['id'=>$recent_course->id]) }}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
