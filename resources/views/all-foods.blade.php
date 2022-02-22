@extends('layouts.app')
@section('content')
<section class="about-area pd-top-120">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.sidebar')
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>
                    @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>
                        <img src="/storage/foods/{{ $food->image }}" width="50px" alt="">
                    </td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->created_at }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
//
