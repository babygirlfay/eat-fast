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
                <form action="{{route('address.upload') }}" method="POST"> @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">street</label>
                                <input type="text" name="street" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">city</label>
                                <input type="text" name="city" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">state</label>
                                <input type="text"  name="state" value="" class="form-control">
                            </div>


                            <button class="btn btn-danger mt-1" >Save</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>
@endsection


//
