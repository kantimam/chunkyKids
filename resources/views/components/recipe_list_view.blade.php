<div class="recipeListContainer">
    @foreach ($recipeList as $item)
        <div class="recipeItem">
            {{-- {{ json_encode($item->recipe) }} --}}
            <img src="https://i.imgur.com/rR2O03r.jpg" alt="food image">
            <div class="recipeInfo">
                <p class=recipeName>
                    some food
                </p>
                <div class="quickInfo">
                    <div class="calInfo">
                        700 cal
                    </div>
                    <div class="ingredientInfo">
                        7 ingredients
                    </div>
                </div>
                <p class="recipeLevel">
                    easy
                </p>
            </div>
        </div>
    @endforeach
</div>