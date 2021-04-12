$(document).ready(function(){
	autoHeight();

	$(window).resize(function(){
		autoHeight();
	});
});

function autoHeight() {
    var height = $(window).outerHeight() - 39;
    console.log(height);
    $("textarea.main").css({ height: height });
}