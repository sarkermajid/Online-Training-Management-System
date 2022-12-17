@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Teacher Form</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('teacher.update',['id'=>$teacher->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-firstname-input" value="{{ $teacher->name }}" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Teacher Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" value="{{ $teacher->email }}" name="email">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="horizontal-phone-input" value="{{ $teacher->mobile }}" name="mobile">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="horizontal-address-input" name="address">{{ $teacher->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($teacher->image) }}" height="70" width="70" class="mb-3" alt="{{ $teacher->name }}">
                                <input type="file" class="form-control-file" id="horizontal-image-input" name="image">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="horizontal-password-input" value="{{ $teacher->password }}" name="password">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
