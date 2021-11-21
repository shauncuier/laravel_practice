@extends('layout.app')
@section('title', 'Service')
@section('content')
    <div class="main-body container-fluid">
        <div class="container">
            <div class="row">

                <div class="col-md-4 p-2">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/lumen.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service Name</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/lumen.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service Name</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/lumen.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service Name</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Your Number</label>
                            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Your Message</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Send Now</button>
                    </form>

                </div>
                <div class="col-md-6 mb-5 mt-5">
                    <h5>Address</h5>
                    <p>Chittagong, Bangladesh</p>
                    <p>hello@jashedulislamshaun.xyz</p>
                    <p>+880-1835-927634</p>
                </div>
            </div>
        </div>
    </div>

@endsection
