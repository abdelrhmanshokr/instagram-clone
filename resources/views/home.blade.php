@extends('layouts.app')

@section('content')
<div class="container">
    <!-- intro row-->
   <div class="row">
       <div class="col-3 p-5">
            <img src="https://instagram.fcai3-2.fna.fbcdn.net/v/t51.2885-19/s320x320/61265210_414150962768513_8817720884077789184_n.jpg?_nc_ht=instagram.fcai3-2.fna.fbcdn.net&_nc_ohc=UCTkIm3QtNAAX_7-kTZ&oh=686fe8d60a51e8dc65ab9c37c039e4ee&oe=5EC68603" alt="image" class="rounded-circle img-fluid">
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">add a new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts </div>
                <div class="pr-5"><strong>120</strong> followers </div>
                <div class="pr-5"><strong>150</strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                <a href="#">{{$user->profile->url ?? 'not available'}}</a>
            </div>
       </div>
   </div>

   <!-- posts row -->
   <div class="row pt-5">
        <div class="col-4">
            <img class="w-11 img-thumbnail" src="data:image/png;base64,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" alt="first image">
        </div>
        <div class="col-4">
            <img class="w-11 img-thumbnail" src="data:image/png;base64,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" alt="second image">
        </div>
        <div class="col-4">
            <img class="w-11 img-thumbnail" src="data:image/png;base64,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" alt="third image">
        </div>  
   </div>
</div>
@endsection
