+function ($) {
	$(document).ready(function(){

		//ensure all links with an external-link class open a new tab
		var $ext_links = $("li.external-link>a");
		$.merge($ext_links , $("a.external-link"));
	   $($ext_links).each(function(){
			$(this).attr("target","_blank")
		});
		
	})
}(jQuery);
;