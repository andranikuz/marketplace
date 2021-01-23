@foreach($categories as $category)
<li>
	@if( old('category') == $category->id)
		<span>{{ $category->title }}</span>
	@else
		<a href="javascript:void(0)" onclick="PostsSearch.setCategory({{ $category->id }})">
			<span>{{ $category->title }}</span>
		</a>
	@endif
	@if(!empty($category->childs))
		<ul class="nested">
			@include('categories.branch', ['categories' => $category->childs])
		</ul>
	@endif
</li>
@endforeach