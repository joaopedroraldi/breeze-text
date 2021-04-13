$(document).ready(function(){
	textareaAutoHeight();

	$(window).resize(function(){
		textareaAutoHeight();
	});

	$(document).on('click', '.control.font-size button', function(){
		var actualSize = parseInt($('textarea.main').css('font-size'));
		var updateSize = $(this).text() == "+" ? (actualSize + 1) : (actualSize - 1);

		$('textarea.main').css({
			fontSize: updateSize
		})
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
    var height = $(window).outerHeight();
    var marginTop = height * 0.1;

    $("textarea.main").css({
    	height: (height * 0.8),
    	marginTop: marginTop
    });
}

function controlPanelToggle() {
	var pannel = $('.control-panel');
	var height = pannel.outerHeight();

	$('.control-panel').animate({
		marginBottom: pannel.hasClass("closed") ? 0 : -height
	});
}