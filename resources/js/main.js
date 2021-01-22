window.PostsSearch = {
	setRegion: function(value = 0, search = true) {
		document.getElementById('region-input').value = value;
		document.getElementById('city-input').value = 0;

		if(!search) {
			if(value!=='0') {
				$.get('/sities/region/' + value, {region_id: value}, function(html) {
	        	    $('#city-container').html(html);
	        	});
			} else {
				$('#city-container').html('');
			}
		}

		if(search) {
			this.search();
		}
	},
	setCity: function(value, search = true) {
		document.getElementById('city-input').value = value;
		if(search) {
			this.search();
		}
	},
	setCategory: function(value, search = true) {
		document.getElementById('category-input').value = value;
		if(search) {
			this.search();
		}
	},
	search: function(page) {
		document.getElementById('page-input').value = page;
		document.getElementById('search-submit').click();
	},
	open: function(uuid) {
		let data = {};
		let url = '/ads/' + uuid + '?';
		if(document.getElementById('region-input').value) {
			url += '&region=' + document.getElementById('region-input').value;
		}

		if(document.getElementById('city-input').value) {
			url += '&city=' + document.getElementById('city-input').value;
		}

		if(document.getElementById('category-input').value) {
			url += '&category=' + document.getElementById('category-input').value;
		}

		if(document.getElementById('pmin-input').value) {
			url += '&pmin=' + document.getElementById('pmin-input').value;
		}

		if(document.getElementById('pmax-input').value) {
			url += '&pmax=' + document.getElementById('pmax-input').value;
		}

		window.location.href = url;
	}
}

window.onload = function() {
	if(document.getElementById('phone')) {
	 	var element = document.getElementById('phone');
		var maskOptions = {
	  		mask: '+{7}(000)-000-0000'
		};
		var mask = new IMask(element, maskOptions);
	}
};

