$(function(){
 
    activePanel = $("#accordion div.panel:first");
    $(activePanel).addClass('active');
 
    $("#accordion").delegate('.panel', 'click', function(e){
        if( ! $(this).is('.active') ){
			$(activePanel).animate({width: "44px"}, 300);
			$(this).animate({width: "848px"}, 300);
			$('#accordion .panel').removeClass('active');
			$(this).addClass('active');
			activePanel = this;
		 };
    });
});