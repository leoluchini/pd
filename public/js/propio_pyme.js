$(function () {
		$("body").on('click','li.propio-pyme', function() {
	    var $this = $(this);
	    
	    $(".current").find('li.propio-pyme.active').removeClass('active');
	    $this.toggleClass('active')

		})

    $("body").on("click", '.next', function () {
    	if( $(".current").find("li.propio-pyme").hasClass('active') ){
    		var li = $(".current").find("li.propio-pyme.active")
    		$.ajax({ url: li.data('url'), success: function(result){
        	$(".current").parent().append(result.html);
      		$('.current').removeClass('current').addClass('hide').next().removeClass('hide').addClass('current');
        	$('#progressbar li.active').next().addClass('active');
    		}});


        if ($('#progress')) {};
    	}

    });

    $("body").on("click", '.previous', function () {
    		var current = $('.current')
        current.removeClass('current').addClass('hide').prev().removeClass('hide').addClass('current');
        current.remove();
        $('#progressbar li.active').removeClass('active').prev().addClass('active');
    });
});