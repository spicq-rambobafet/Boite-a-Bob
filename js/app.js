$('document').ready(function ($) {

    $("#slider").slider({
        range: "min",
        value: 80,
        min: 1,
        max: 100,
        slide: function (event, ui) {
            volume = ui.value / 100;
            console.log(volume);
        }
    });

    var volume = $('#slider').slider("option", "value") / 100;

    $('article').click(function (e) {
        e.preventDefault();
        var audio = $(this).children('audio');
        volume = $('#slider').slider("option", "value") / 100;
        console.log();
        audio[0].volume = volume;
        audio[0].play();
        //$(this).children('audio').trigger('play');
    });

});