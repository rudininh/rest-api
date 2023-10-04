// let = mahasiswa = {
//     nama : "Rudini Nor Habibi",
//     NRP : "19310630",
//     email : "rudini@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa)
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('pizza.json', function (data) {
        let menu = data.menu_pizza_hut.pizzas;
       
        $.each(menu, function(i, data) {
            $('#daftar-menu').append('<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="'+ data.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5>Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
        });
    });