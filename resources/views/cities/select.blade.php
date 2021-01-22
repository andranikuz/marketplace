<select class="form-control" id="citySelect" 
    onchange="PostsSearch.setCity(this.value)"
    value="{{ old('city') }}">
    <option value="0">
        {{ __('All cities') }}
    </option>
    @foreach($cities as $city)
        <option value="{{ $city->slug }}" @if($city->slug == old('city')) selected @endif>
            {{ $city->name }}
        </option>
    @endforeach
</select>