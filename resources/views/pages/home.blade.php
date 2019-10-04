@extends('layouts.main')

@section('content')
    <script type="text/javascript">
        let contentContainer, sideContainer;
        window.onload=function(){
            contentContainer=document.getElementsByClassName("contentContainer")[0];
            sideContainer=document.getElementsByClassName("sideContainer")[0];
            const scrollCont=document.getElementById("mainScrollContainer");
            if(window.innerHeight!==scrollCont.scrollHeight){
                console.log("loaded");
                sideContainer.classList.add("scrollbarMargin");
            }
        }
        
        function hideSidebar(){
            const contentContainer=document.getElementsByClassName("contentContainer")[0];
            const sideContainer=document.getElementsByClassName("sideContainer")[0];

            contentContainer.classList.toggle("expanded100");
            sideContainer.classList.toggle("shrinkHide");

        }
    </script>
    <div class="contentContainer">
        
        @include('components.calories_heading', ['calPerDay'=>2600, 'calPlaned'=>1000])
        <h1 class="searchHeader">
            your healthy {{ $activeRoute }}
        </h1>
        @include('components.search_bar', ['tagOptions'=>["low carb"]])
        @yield('recipe_list_view')
    </div>
    <div class="sideContainer">
        <button onclick="hideSidebar()" class="hideSidebar">
            X
        </button>
        <aside>
            XXXX
        </aside>
    </div>
    
@endsection