<select class="form-control" id="regionSelect" 
    onchange="PostsSearch.setRegion(this.value)"
    value="{{ old('region') }}">
    <option value="0">
        {{ __('All regions') }}
    </option>
    @foreach($regions as $region)
        <option value="{{ $region->id }}" @if($region->id == old('region')) selected @endif>
            {{ $region->name }}
        </option>
    @endforeach
</select>