

$(document).ready(function() {
    $('#search-button').click(function() {
       
        $.ajax({

            url: 'http://www.omdbapi.com/',
            type: 'GET',
            dataType: 'JSON',
            data : {
                'apikey' : '55563ee7',
                's' : $('#search-input').val()
            },
            success : function (result) {
                console.log(result);
            }
        });
        
});
});

