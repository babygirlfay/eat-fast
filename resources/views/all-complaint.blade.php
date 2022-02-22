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
                    <th>title</th>
                    <th>message</th>

                </tr>
            </thead>
            <tbody>
                    @foreach ($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->id}}</td>
                    <td>{{ $complaint->title}}</td>
                    <td>{{ $complaint->message}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
//
