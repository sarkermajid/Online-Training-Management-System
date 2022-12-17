@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Information</h4>
                    <h4 class="card-title-desc text-success text-center">{{ Session::get('message') }}</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Fee</th>
                            <th>Starting Date</th>
                            <th>Course Status</th>
                            <th>Course Offer Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{ $course->status == 1 ? '' : 'bg-warning' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($course->image) }}" alt="" height="50" width="50"></td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->fee }}</td>
                                <td>{{ $course->starting_date }}</td>
                                <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>{{ $course->offer_status == 1 ? 'Offer Published' : 'Not Available' }}</td>
                                <td>
                                    <a href="{{ route('admin.course.detail', ['id'=>$course->id]) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-book-open"></i></a>
                                    <a href="{{ route('admin.course.status', ['id'=>$course->id]) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-arrow-alt-circle-up"></i></a>
                                    <a href="{{ route('admin.course.offer-status', ['id'=>$course->id]) }}" class="btn btn-outline-dark btn-sm"><i class="fa fa-book-dead"></i></a>
                                    <a href="{{ route('admin.course.delete', ['id'=>$course->id]) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
