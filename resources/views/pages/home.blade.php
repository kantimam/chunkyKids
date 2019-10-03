@extends('layouts.main'/* , ['activeRoute'=>$activeRoute] */)

@section('content')
    <div class="contentContainer">
        @include('components.calories_heading', ['calPerDay'=>2600, 'calPlaned'=>1000])
        <h1 class="searchHeader">
            your healthy {{ $activeRoute }}
        </h1>
        @include('components.search_bar', ['tagOptions'=>["low carb"]])
    </div>
    <div class="sideContainer">

    </div>
@endsection