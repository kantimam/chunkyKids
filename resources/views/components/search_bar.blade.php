<form action=" {{ route('edamam') }} " method="GET" class="searchForm">
    <div class="searchContainer">
        <input placeholder="add search terms" name="query" style="background-image: url('{{ asset('img/searchIcon.svg') }}');" type="text" class="searchInput">
        <input type="submit" class="submitButton">
    </div>
    <select name="tags" class="tagOptions">
        @foreach ($tagOptions as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
</form>