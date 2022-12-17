@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Category Form</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('category.update',['id'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-name-input" class="col-sm-3 col-form-label">Category name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-name-input" value="{{ $category->name }}" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-description-input" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="horizontal-description-input" name="description">{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-description-input" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <label for=""><input type="radio" value="1" name="status" {{ $category->status == 1 ? 'Checked' : '' }}> Published</label>
                                &nbsp;
                                <label for=""><input type="radio" value="0" name="status" {{ $category->status == 0 ? 'Checked' : '' }}> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($category->image) }}" height="100" width="150" class="mb-3" alt="{{ $category->name }}">
                                <input type="file" class="form-control-file" id="horizontal-image-input" name="image">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
