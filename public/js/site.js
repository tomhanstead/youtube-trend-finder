$(function(){
    // bind change event to select
    $('#dynamic_select').on('change', function () {
        $('.youtube-feed').empty();
        var url = $(this).val(); // get selected value
        if (url) { // require a URL
            $.getJSON(url, function (data) {
                $('#load').show();
                $.each(data, function (index, element) {
                    console.log(element);
                    var item = $('.youtube-feed').append(
                        '<h4>'+  element.snippet.title +'</h4>' +
                        '<iframe frameBorder="0" src="http://www.youtube.com/embed/'+ element.id + '" width="333" height="333"></iframe>'
                    );
                });
                $('#load').hide();
            })
            // $.ajax({url: url, success: function(data){
            //     $.each(data, function (index, element) {
            //         console.log(element);
            //         $(".youtube-feed").append(
            //             // '<p class="trending">#' + element.snippet.title + '</p>'
            //         );
            //     });
                    
            //     }});

            // //window.location = url; // redirect
        }
        return false;
    });

    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 300,      // millisecond interval at which to process events
        threshold: 100,     // scroll distance from element before its loaded
        live: true          // auto bind lazy loading to ajax loaded elements
    });

    // check to see if user is online
    var online = navigator.onLine;
    if (online === true){
        $('#offline').html('<h1>Connected</h1>')
    } else {
        $('#offline').html('<h1>Please check your internet connection</h1>');
        $('.yt-container').hide();
    }
});