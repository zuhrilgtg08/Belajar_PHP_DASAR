// ambil elemen yang dibutuhkan
var key = document.getElementById('key');
var search = document.getElementById('search');
var container = document.getElementById('container');

// tambah event ketika keyword ditulis
key.addEventListener('keyup', function () {
  // buat objek ajax
    var xhr = new XMLHttpRequest();

  // mengecek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/ajax.php?key=' + key.value, true);
    xhr.send();
});

