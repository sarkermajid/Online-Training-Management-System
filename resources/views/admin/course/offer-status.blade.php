@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add New Offer</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('admin.course.offer-create',['id'=>$course->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-title-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $course->title }}" id="horizontal-title-input" name="title" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-fee-input" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $course->fee }}" name="fee" id="horizontal-fee-input" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-offer-fee-input" class="col-sm-3 col-form-label">Offer Fee</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="offer_fee" id="horizontal-offer-fee-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Offer Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-image-input" name="image">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-date-input" class="col-sm-3 col-form-label">Offer Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="horizontal-date-input" name="offer_date">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create Offer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
