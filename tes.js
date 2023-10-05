
$.getJSON('pizza.json', function (data) {
    let menupizzas = data.menu_pizza_hut.pizzas;
    let menupasta = data.menu_pizza_hut.pasta;
    let menuminuman = data.menu_pizza_hut.minuman;

   
    $.each(menupizzas, function(i, data) {
        $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
    });

    $.each(menupasta, function(i, data) {
        $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
    });

     
   
    $.each(menuminuman, function(i, data) {
        $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
    });

     
   
     
   
    
});