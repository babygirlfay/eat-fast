@extends('layouts.app')
@section('content')
<section class="about-area pd-top-120">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                <h4>Hello {{ Auth::user()->name }}</h4>
                <form action="{{route('complaint.upload') }}" method="POST"> @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">title</label>
                                <input type="text" name="title" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">message</label>
                                <input type="text" name="message" value="" class="form-control">
                            </div>



                            <button class="btn btn-secondary mt-1" >Save</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>
@endsection


//
