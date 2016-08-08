$(function(){
 
    activePanel = $("#accordion div.panel-accordion:first");
    $(activePanel).addClass('active');
 
    $("#accordion").delegate('.panel-accordion', 'click', function(e){
        if( ! $(this).is('.active') ){
			$(activePanel).animate({width: "44px"}, 300);
			$(this).animate({width: "848px"}, 300);
			$('#accordion .panel-accordion').removeClass('active');
			$(this).addClass('active');
			activePanel = this;
		 };
    });

    $("body").on('click',".list-group-item", function(event){
    	event.stopPropagation();
    	event.preventDefault();
    	$(this).parent().find('.active').removeClass('active');
    	$(this).addClass('active');
        panel_id = $(this).closest(".panel-accordion").attr('id');
        if($('.breadcrumb').has('#'+panel_id).length){
            $('.breadcrumb #'+panel_id).nextAll().remove();
            $('.breadcrumb #'+panel_id).remove();
        }
        $(".breadcrumb").append('<li id="'+panel_id+'"><a class="breadcrumb-link" href="#'+panel_id+'">'+$(this).html()+'</a></li>');
        next = $('.panel-accordion.active').next().trigger('click'); 
        $.ajax({
            url: $(this).attr('href'),
            success: function(data){
                $(next).find('.list-plan').html(data.html);
            }
        })
    })

    $("body").on('click',".breadcrumb-link", function(event){
        event.stopPropagation();
        event.preventDefault();
        $($(this).attr('href')).click();  
    })
});