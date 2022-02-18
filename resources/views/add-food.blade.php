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

                <form action="{{route('food.upload') }}" method="POST"> "@csrf"

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">price</label>
                                <input type="text" name="price" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file"  name="image" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" name="description" value="" class="form-control">
                            </div>

                            <button class="btn btn-primary mt-1" >Save</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>
@endsection


//
