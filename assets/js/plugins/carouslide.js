$('.carousel-caption a').on('click',function(e){
	this_id = $(this).context.attributes.href.textContent;
	if($(this_id).hasClass('in')){
        e.stopPropagation();
		e.preventDefault();
	}
});