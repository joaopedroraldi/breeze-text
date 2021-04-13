$(document).ready(function(){
	textareaAutoHeight();

	$(window).resize(function(){
		textareaAutoHeight();
	});


	
	setTimeout(function(){
		controlPanelToggle();
	}, 500);

	$(document).on('click', '.control-panel-toggle', function(){
		$('.control-panel').toggleClass('closed');
		controlPanelToggle();
	})
});

function textareaAutoHeight() {
    var height = $(window).outerHeight() - 39;
    console.log(height);
    $("textarea.main").css({ height: height });
}

function controlPanelToggle() {
	var pannel = $('.control-panel');
	var height = pannel.outerHeight();

	$('.control-panel').animate({
		marginBottom: pannel.hasClass("closed") ? 0 : -height
	});
}