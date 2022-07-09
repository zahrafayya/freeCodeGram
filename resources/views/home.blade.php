@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/svg/FCCProfilePicture.svg" class="rounded-circle" style="max-height: 160px">
            </div>
            <div class="col-9 pt-5">
                <div><h1>{{ $user->username }}</h1></div>
                <div class="d-flex">
                    <div class="pr-5"><strong>479</strong> posts</div>
                    <div class="pr-5"><strong>104K</strong> followers</div>
                    <div class="pr-5"><strong>356</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://www.freecodecamp.org/">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" src="https://thumbs.dreamstime.com/b/cute-cat-portrait-square-photo-beautiful-white-closeup-105311158.jpg">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://thumbs.dreamstime.com/b/cute-cat-portrait-square-photo-beautiful-white-closeup-105311158.jpg">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://thumbs.dreamstime.com/b/cute-cat-portrait-square-photo-beautiful-white-closeup-105311158.jpg">
            </div>
        </div>
    </div>
@endsection
