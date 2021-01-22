<label>Регион</label>
<div class="form-group">
    @include('regions.select')
</div>
<div class="form-group">
    <div id="city-container">
        @if( !empty($region) )
            @include('cities.select', ['cities' => $region->cities])
        @endif
    </div>
</div>
<div role="separator" class="dropdown-divider"></div>
<div class="category-container">   
    @include('categories.tree')
</div>