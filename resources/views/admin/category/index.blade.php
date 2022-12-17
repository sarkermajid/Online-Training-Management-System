@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Category Form</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('category.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-name-input" class="col-sm-3 col-form-label">Category name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-name-input" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-description-input" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="horizontal-description-input" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-description-input" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <label for=""><input type="radio" value="1" name="status"> Published</label>
                                &nbsp;
                                <label for=""><input type="radio" value="0" name="status"> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-image-input" name="image">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
