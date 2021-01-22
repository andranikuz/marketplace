@foreach($categories as $category)
<li>
	<a href="javascript:void(0)" onclick="PostsSearch.setCategory({{ $category->id }})"><span>{{ $category->title }}</span></a>
	@if(!empty($category->childs))
		<ul class="nested">
			@include('categories.branch', ['categories' => $category->childs])
		</ul>
	@endif
</li>
@endforeach