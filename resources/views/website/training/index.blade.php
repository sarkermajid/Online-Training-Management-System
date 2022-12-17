@extends('website.master')


@section('title')
    Training Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>All Training Information</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($courses as $course)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100">
                            <img src="{{ asset($course->image) }}" alt="" class="">
                            <div class="card-body">
                                <a href="{{ route('training.detail',['id'=>$course->id]) }}" class="text-decoration-none text-dark"><h4>{{ $course->title }}</h4></a>
                                <p class="mb-0">Price: {{ $course->fee }} BDT</p>
                                <p class="mb-0">Starting Date: {{ $course->starting_date }}</p>
                                <p class="mb-0">Author: {{ $course->teacher->name }}</p>
                                <hr/>
                                <a href="{{ route('training.detail',['id'=>$course->id]) }}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <div class="float-end">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
