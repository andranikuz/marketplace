<div class="input-group rounded">
    <form method="GET" action="{{ route('home') }}" class="w-100">
    	<div class="d-flex d-flex justify-content-end">
	 
	        <div class="col-md-10">
	        	<input type="search" id="query" name="query" class="form-control rounded" placeholder="{{ __('Search') }}" aria-label=	"Search"aria-describedby="search-addon" />
	        	<input id="region-input" class="d-none" name="region" value="{{ old('region') }}">
	        	<input id="city-input" class="d-none" name="city" value="{{ old('city') }}">
	        	<input id="category-input" class="d-none" name="category" value="{{ old('category') }}">
	        	<input id="pmin-input" class="d-none" name="pmin" value="{{ old('pmin') }}">
	        	<input id="pmax-input" class="d-none" name="pmax" value="{{ old('pmax') }}">
	        	<input id="page-input" class="d-none" name="page" value="1">
	        </div>
	        <div>
		        <button type="submit" class="btn btn-primary" id="search-submit">
		            {{ __('Search') }}
		        </button>
		    </div>
	    </div>
    </form>
</div>