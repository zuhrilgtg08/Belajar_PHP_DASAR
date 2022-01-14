// ambil elemen yang dibutuhkan
var keyword = document.getElementById('#key');
var tombolCari = document.getElementById('#search');
var container = document.getElementById('#container');

// tambah event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
  // buat objek ajax
  var xhr = new XMLHttpRequest();

  // mengecek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open('GET', 'ajax/coba.txt', true);
  xhr.send();
});
