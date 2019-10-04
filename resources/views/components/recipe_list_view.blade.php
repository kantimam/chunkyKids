<div class="recipeListContainer">
    @foreach ($recipeList as $item)
        <div class="recipeItem">
            {{-- {{ json_encode($item->recipe) }} --}}
        <img src="{{$item->recipe->image}}" alt="food image">
            <div class="recipeInfo">
                <p class=recipeName>
                    {{$item->recipe->label}}
                </p>
                <div class="quickInfo">
                    <div class="calInfo">
                        {{ round($item->recipe->calories) }}
                    </div>
                    <div class="ingredientInfo">
                        {{ sizeof($item->recipe->ingredients) }}
                    </div>
                </div>
                <p class="recipeLevel">
                    {{ $item->recipe->dietLabels[0] ?? "" }}
                </p>
            </div>
        </div>
    @endforeach
</div>