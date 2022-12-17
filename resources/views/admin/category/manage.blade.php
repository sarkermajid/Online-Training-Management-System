@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Category Information</h4>
                    <h4 class="card-title-desc text-center text-danger">{{ Session::get('message_delete') }}</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($category->image) }}" alt="" height="50" width="50"></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('category.delete', ['id'=>$category->id]) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></a>
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
