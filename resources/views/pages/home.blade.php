@extends('layouts.main', ['activeRoute'=>$activeRoute])

@section('content')
    <div class="contentContainer">
        @include('components.search_bar', ['tagOptions'=>["low carb"]])
    </div>
@endsection