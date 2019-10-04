@extends('pages.home')

@section('recipe_list_view')
    @include('components.recipe_list_view', ['recipeList'=>$recipeList])
@endsection