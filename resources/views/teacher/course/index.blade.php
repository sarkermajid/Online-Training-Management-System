@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Form</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('course.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-category-input" class="col-sm-3 col-form-label">Course Category</label>
                            <div class="col-sm-9">
                                <select name="category_id" class="form-control">
                                    <option value=""> -- Select Course Category -- </option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-title-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-title-input" name="title">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-objective-input" class="col-sm-3 col-form-label">Course Objective</label>
                            <div class="col-sm-9">
                                <textarea id="horizontal-objective-input" name="objective"  class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-description-input" class="col-sm-3 col-form-label">Course Description</label>
                            <div class="col-sm-9">
                                <textarea id="horizontal-description-input" name="description"  class="form-control summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-starting_date-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="horizontal-starting_date-input" name="starting_date">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-fee-input" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="horizontal-fee-input" name="fee">
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
                                    <button type="submit" class="btn btn-primary w-md">Create New Course</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
