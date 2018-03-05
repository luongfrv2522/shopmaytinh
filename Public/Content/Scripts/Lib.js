var Pagination = {
	getHashParameter:function() {
		var result = "";
		var origin = new String("#page-").length;
		if(window.location.hash){
			var hash = window.location.hash;
			result = hash.substring(origin);
		}
		return result;
	},
	setHashParameter:function(pageIndex){
		var origin = "page-";
		window.location.hash = origin + pageIndex;
	},
	setIndex:function(index, page, size){
		var rs = index + ((page-1) * size);
		//console.log(rs);
		return rs;
	}
};
