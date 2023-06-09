$(document).ready(function() {
    // Menambahkan +62 pada value input telepon
    $('#telepon').on('change', function() {
      var telepon = $(this).val();
      if (telepon) {
        // Menghapus spasi dan karakter selain angka
        telepon = telepon.replace(/\D/g, '');
        // Menambahkan +62 pada awal nomor telepon
        telepon = '+62' + telepon.substr(1);
        $(this).val(telepon);
      }
    });
  
    // Memastikan input telepon berupa nomor telepon
    $('#telepon').on('input', function() {
      var telepon = $(this).val();
      // Menghapus spasi dan karakter selain angka
      telepon = telepon.replace(/\D/g, '');
      $(this).val(telepon);
    });
  });
  