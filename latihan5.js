function SearchMovie(){
    $('#movie-list').html(` `)

    $.ajax({

        url: 'http://www.omdbapi.com/',
        type: 'GET',
        dataType: 'JSON',
        data : {
            'apikey' : '55563ee7',
            's' : $('#search-input').val()
        },
        success : function (result) {
            if (result.Response == "True")
            {   
                $('#movie-list').html(` `)
                let movies = result.Search;

                $.each(movies, function (i, data) {

                    $('#movie-list').append(`
                    
                    <div class="col-md-4">
                        <div class="card mb-3">
                        <img src="${data.Poster}" class="card-img-top">
                            <div class="card-body">
                            <h5 class="card-title">${data.Title} </h5>
                            <h6 class="card-subtitle mb-2 text-muted">${data.Year}</h6>
                            <a href="https://www.imdb.com/title/${data.imdbID}/" class="card-link">See Detail</a>
                            </div>
                        </div>
                    </div>
                    `);

                }); 


            }   else {

               

                $('#movie-list').html(`
                <div class="col">
                <h1 class="text-center">${result.Error}</h1>
                
                `)
            }
        }
    });

};

$(document).ready(function() {
    $('#search-button').click(function() {
      
        SearchMovie();
     

});
});

$(document).ready(function() {
    $('#search-input').keyup(function(event) {
      
        if (event.keyCode === 13){
            SearchMovie();
        };
     

});
});

// $('#search-input').on('keyup', function(event){
//     if (event.keyCode === 13){
//         SearchMovie();
//     };


// });