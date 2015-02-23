$('document').ready(function($){
	
	$( "#slider" ).slider({
		range: "min",
		value: 80,
		min: 1,
		max: 100,
		slide: function( event, ui ) {
			volume = ui.value / 100;
			console.log(volume);
		}
	});
	
	var volume = $('#slider').slider("option", "value") /100;

	$('article').click(function(e){
		e.preventDefault();
		var sound = $(this).attr('data-sound');
		ion.sound.play(sound, {
			volume: volume
		});
	});
	
});