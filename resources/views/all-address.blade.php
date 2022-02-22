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
                    <th>id</th>
                    <th>street</th>
                    <th>city</th>
                    <th>state</th>
                    <th>date</th>


                </tr>
            </thead>
            <tbody>
                    @foreach ($address as $address)
                <tr>
                    <td>{{ $address->id}}</td>
                    <td>{{ $address->street}}</td>
                    <td>{{ $address->city}}</td>
                    <td>{{ $address->state}}</td>
                    <td>{{ $address->created_at }}</td>

                </tr>
                @endforeach
                <td>{{ $address->id }}</td>
            </tbody>
        </table>
    </div>
</section>
@endsection
//
