@if(empty( old('category') ))
<span>Все категории</span> 
@else
<a href="#" onclick="PostsSearch.setCategory(0)">Все категории</a> 
@endif
<ul class="mb-3">
    @include('categories.branch')
</ul>