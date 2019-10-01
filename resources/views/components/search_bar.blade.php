<form action="" class="searchForm">
    <input style="background-image: url('{{ asset('img/searchIcon.svg') }}');" type="text" class="searchInput">
    <select name="tags" class="tagOptions">
        @foreach ($tagOptions as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
</form>