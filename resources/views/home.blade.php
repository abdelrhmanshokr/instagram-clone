@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
            <img src="https://instagram.fcai3-2.fna.fbcdn.net/v/t51.2885-19/s320x320/61265210_414150962768513_8817720884077789184_n.jpg?_nc_ht=instagram.fcai3-2.fna.fbcdn.net&_nc_ohc=UCTkIm3QtNAAX_7-kTZ&oh=686fe8d60a51e8dc65ab9c37c039e4ee&oe=5EC68603" alt="image" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex">
                <h1>user name</h1>
                <button class="btn-success btn-small">follow</button>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts </div>
                <div class="pr-5"><strong>120</strong> followers </div>
                <div class="pr-5"><strong>150</strong> following </div>
            </div>
       </div>
   </div>
</div>
@endsection
