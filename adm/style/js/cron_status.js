; (function ($, window, document) {
	// do stuff here and use $, window and document safely
	// https://www.phpbb.com/community/viewtopic.php?p=13589106#p13589106
	var time = 59;
	function progress() {
		var element = $('#ProgressStatus');
		var circle = $('#circle');
		if (time === 9) element.css("right", "12px");
		element.html(time);
		$('#date').text(getISODateTime());
		if (time === 0) {
			clearInterval(interval);
			element.html("");
			circle.removeClass("fa-circle-o-notch");
			circle.addClass("fa-refresh");
			$.ajax({
				url: window.location.href + "&table=true",
				context: document.getElementById("cron_table"),
				error: function (e, text, ee) {
					circle.css("display", "none");
					if (text == "timeout") {
						$("#LoadErrorTimeout").css("display", "inline-block");
						$("#LoadError").css("display", "block");
					} else {
						$("#LoadPageError").css("display", "inline-block");
						$("#LoadError").css("display", "block");
					}
				},
				success: function (s, x) {
					element.css("right", "8px");
					element.html(60);
					time = 59;
					circle.removeClass("fa-refresh");
					circle.addClass("fa-circle-o-notch");
					interval = setInterval(progress, 1000);
					$(this).html(s);
					$('#date').text(getISODateTime());
				}
			});
		}
		time--;
	}
	var interval = setInterval(progress, 1000);
	
		$("a.simpledialog").simpleDialog({
	    opacity: 0.1,
	    width: '650px',
		height: '600px'
	});

	function getISODateTime(d){
		var s = function(a,b){return(1e15+a+"").slice(-b)};
	
		if (typeof d === 'undefined'){
			d = new Date();
		};
	
		// return ISO datetime
		return  s(d.getDate(),2) + '-' +
				s(d.getMonth()+1,2) + '-' +
				d.getFullYear() + ' ' +
				s(d.getHours(),2) + ':' +
				s(d.getMinutes(),2) + ':' +
				s(d.getSeconds(),2);
	}
	// For immediate display
	$('#date').text(getISODateTime());

})(jQuery, window, document);