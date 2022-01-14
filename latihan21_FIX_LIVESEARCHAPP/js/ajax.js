// // ambil elemen yang dibutuhkan
// var key = document.getElementById('key');
// var search = document.getElementById('search');
// var container = document.getElementById('container');

// // tambah event ketika keyword ditulis
// key.addEventListener('keyup', function () {
//   // buat objek ajax
//   var xhr = new XMLHttpRequest();

//   // mengecek kesiapan ajax
//   xhr.onreadystatechange = function() {
//         if( xhr.readyState == 4 && xhr.status == 200 ) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // eksekusi ajax
//     xhr.open('GET', 'ajax/ajax.php?key=' + key.value, true);
//     xhr.send();
// });

$(document).ready(function(){
    // mebghilangkan tombol cari data
    $('#tombol').hide();


    // event ketika keyword ditulis
    $('#key').on('keyup', function(){
        // munculkan loading
        $('.loader').show();
        
        // ajax menggunakan load
        // $('#container').load('ajax/ajax.php?key=' + $('#key').val());

        // $.get()
        $.get('ajax/ajax.php?key=' + $('#key').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});