@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Teacher Information</h4>
                    <p class="card-title-desc">{{ Session::get('message') }}</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($teacher->image) }}" alt="" height="50" width="50"></td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->mobile }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>
                                <a href="{{ route('teacher.edit', ['id'=>$teacher->id]) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('teacher.delete', ['id'=>$teacher->id]) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></a>
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
