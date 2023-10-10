
// $.getJSON('pizza.json', function (data) {
//     let menupizzas = data.menu_pizza_hut.pizzas;
//     // let menupasta = data.menu_pizza_hut.pasta;
//     // let menuminuman = data.menu_pizza_hut.minuman;

//     $('#daftar-menu').empty();
    
//     $.each(menupizzas, function(i, data) {
//         $('#daftar-menu').append(`
//         <div class="col-md-4">
//             <div class="card" style="width: 18rem;">
//             <img src="${data.gambar}" class="card-img-top">
//                 <div class="card-body">
//                 <h5 class="card-title">${data.nama} </h5>
//                 <p class="card-text">${data.deskripsi}</p>
//                 <h5>Rp. ${data.harga}</h5>
//                 <a href="#" class="btn btn-primary">Pesan Sekarang</a>
//                 </div>
//             </div>
//         </div>`);
//     });

//     // $.each(menupasta, function(i, data) {
//     //     $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
//     // });

     
   
//     // $.each(menuminuman, function(i, data) {
//     //     $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
//     // });
  
    
// });



     $(document).ready(function() {
        $('.nav-link').click(function() {
              $('.nav-link').removeClass('active');
              $(this).addClass('active')
              
              let kategori = $(this).html();
              $('h1').html(kategori); 

              $.getJSON('pizza.json', function (data) {
                let menu = data.menu;      
                let content = '';
                // let menupasta = data.menu_pizza_hut.pasta;
                // let menuminuman = data.menu_pizza_hut.minuman;
                  $('#daftar-menu').empty();
                
                $.each(menu, function(i, data) {
                    if (data.kategori == kategori) {
                        console.log(menu);
                        content += `
                                <div class="col-md-4">
                                    <div class="card" style="width: 18rem;">
                                    <img src="${data.gambar}" class="card-img-top">
                                        <div class="card-body">
                                        <h5 class="card-title">${data.nama} </h5>
                                        <p class="card-text">${data.deskripsi}</p>
                                        <h5>Rp. ${data.harga}</h5>
                                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>`
                                ;
                                
                } $('#daftar-menu').html(content);
                    

                });
                
        });

      
    });
});




// $(document).ready(function() {
//     $('.nav-link').click(function() {
//           $('.nav-link').removeClass('active');
//           $(this).addClass('active')
          
//           let kategori = $(this).html();
//           $('h1').html(kategori); 

//           $.getJSON('pizza.json', function (data) {
//             let menu = data.menu;
//             let content = '';

//              $.each(menu, function(i, data) {
//         $('#daftar-menu').append(`
//         <div class="col-md-4">
//             <div class="card" style="width: 18rem;">
//             <img src="${data.gambar}" class="card-img-top">
//                 <div class="card-body">
//                 <h5 class="card-title">${data.nama} </h5>
//                 <p class="card-text">${data.deskripsi}</p>
//                 <h5>Rp. ${data.harga}</h5>
//                 <a href="#" class="btn btn-primary">Pesan Sekarang</a>
//                 </div>
//             </div>
//         </div>`);
//     });
            
//     });

  
// });
// });