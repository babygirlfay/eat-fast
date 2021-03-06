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
                <form action="{{ route('update-profile') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ auth::user()->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ auth::user()->email }}" class="form-control">
                            </div>


                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
