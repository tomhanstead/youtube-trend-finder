$(function(){
    // bind change event to select
    $('#dynamic_select').on('change', function () {
        console.log('asd');
        var url = $(this).val(); // get selected value
        if (url) { // require a URL
            $.ajax({url: url, success: function(result){
                    $(".youtube-feed").append(
                        '<p class="trending">#' + result.snippet.title + '</p>'
                    );
                }});

            //window.location = url; // redirect
        }
        return false;
    });
});