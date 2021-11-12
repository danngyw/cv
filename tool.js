(function($){
	$(document).ready(function(){
		$(".content-font").change(function(event){
			var font = this.value;
			console.log(font);
		  	$.ajax({
	            url: cv.ajaxURL,
	            type: 'post',
	            data: {action:'content_font',font:font},
	            beforeSend: function() { },
	            success: function(result) {
	            	console.log(result);
	            	const res = JSON.parse(result);

	            	console.log(res);
	            	console.log(res.success);
	            	if(res.success){
	            		location.reload();
	            	} else{
	            		alert('fail');
	            	}
	            }
	        });
        })
        $(".content-label").change(function(event){
			var font = this.value;
			console.log(font);
		  	$.ajax({
	            url: cv.ajaxURL,
	            type: 'post',
	            data: {action:'label_font',font:font},
	            beforeSend: function() { },
	            success: function(result) {
	            	console.log(result);
	            	const res = JSON.parse(result);

	            	console.log(res);
	            	console.log(res.success);
	            	if(res.success){
	            		location.reload();
	            	} else{
	            		alert('fail');
	            	}
	            }
	        });
        })
	})
})(jQuery);