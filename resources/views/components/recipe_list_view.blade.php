<div class="recipeListContainer">
    @foreach ($recipeList as $item)
        <p class="recipeItemP">
            {{ json_encode($item->recipe) }}
        </p>
    @endforeach
</div>