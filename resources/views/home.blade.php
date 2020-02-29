@extends('layouts.app')

@section('content')

<div class="container">
{{-- <a href="{{route('createPost')}}">Add Post</a> --}}
   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <a href="{{route('addformpost')}}">+New Post</a>
                <a href="{{route('viewPost')}}" class="float-right">All Posts</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>ID:{{Auth::id()}}</p>
                    <p>Name: {{Auth::user()->name}}</p>
                    <p>Email: {{Auth::user()->email}}</p>
                    <p>Phone: {{Auth::user()->profile->phone}}</p>
                    <p>Address: {{Auth::user()->profile->address}}</p>
                    {{-- <p>{{Auth::user()->email}}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
