@extends('website.master')

@section('title')
    Enroll
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Enroll</h3>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Enroll Form</h4>
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{ route('training.new-enroll',['id'=>$id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-firstname-input" name="name"/>
                                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="horizontal-email-input" name="email"/>
                                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="horizontal-password-input2" name="mobile"/>
                                        <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Payment Type</label>
                                    <div class="col-sm-9">
                                        <label for=""><input type="radio" name="payment_type" checked value="1"/> Cash On Delivary</label>
                                        &nbsp; &nbsp; &nbsp;
                                        <label for=""><input type="radio" name="payment_type" value="2"/> Online</label>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Enroll</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
