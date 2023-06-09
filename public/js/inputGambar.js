$(document).ready(function() {
    // Menampilkan preview gambar saat gambar dipilih
    $('#gambar').on('change', function() {
      var gambar = $(this)[0].files[0];
      if (gambar) {
        var reader = new FileReader();
        reader.onload = function() {
          $('#gambar-preview').attr('src', reader.result);
        }
        reader.readAsDataURL(gambar);
      }
    });
  });
  