
    // Mendapatkan data provinsi dari API
    $.ajax({
      url: "https://dev.farizdotid.com/api/daerahindonesia/provinsi",
      type: "GET",
      success: function (response) {
        var provinces = response.provinsi;
        var select = $("#provinsi");
        $.each(provinces, function (index, province) {
          select.append('<option value="' + province.id + '">' + province.nama + '</option>');
        });
      }
    });

    // Mengisi data kota/kabupaten berdasarkan provinsi yang dipilih
    $("#provinsi").on("change", function () {
      var provinceId = $(this).val();
      var select = $("#kabupaten");
      select.empty();
      select.append('<option value="">Pilih Kota/Kabupaten</option>');

      $.ajax({
        url: "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" + provinceId,
        type: "GET",
        success: function (response) {
          var cities = response.kota_kabupaten;
          $.each(cities, function (index, city) {
            select.append('<option value="' + city.id + '">' + city.nama + '</option>');
          });
        }
      });
    });

    // Mengisi data kecamatan berdasarkan kota/kabupaten yang dipilih
    $("#kabupaten").on("change", function () {
      var cityId = $(this).val();
      var select = $("#kecamatan");
      select.empty();
      select.append('<option value="">Pilih Kecamatan</option>');

      $.ajax({
        url: "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" + cityId,
        type: "GET",
        success: function (response) {
          var districts = response.kecamatan;
          $.each(districts, function (index, district) {
            select.append('<option value="' + district.id + '">' + district.nama + '</option>');
          });
        }
      });
    });

     // Mengisi data kelurahan/desa berdasarkan kecamatan yang dipilih
     $("#kecamatan").on("change", function () {
      var districtId = $(this).val();
      var select = $("#desa");
      select.empty();
      select.append('<option value="">Pilih Desa/Kelurahan</option>');

      $.ajax({
        url: "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=" + districtId,
        type: "GET",
        success: function (response) {
          var villages = response.kelurahan;
          $.each(villages, function (index, village) {
            select.append('<option value="' + village.id + '">' + village.nama + '</option>');
          });
        }
      });
    });

    // Fungsi untuk menyalin isi propinsi, kabupaten, kecamatan, dan kelurahan ke kolom alamat
    function updateAlamat() {
        var propinsi = $("#provinsi option:selected").text();
        var kabupaten = $("#kabupaten option:selected").text();
        var kecamatan = $("#kecamatan option:selected").text();
        var kelurahan = $("#desa option:selected").text();
        var alamat = kelurahan + ", " + kecamatan + ", " + kabupaten + ", " + propinsi;
        
        $("#alamat").val(alamat);
    }

    // Menjalankan fungsi updateAlamat() setiap kali terjadi perubahan pada dropdown propinsi, kabupaten, atau kelurahan
    $("#provinsi, #kabupaten, #desa").on("change", function() {
        updateAlamat();
    });

     // Fungsi untuk memeriksa validitas email
     function isValidEmail(email) {
        // Pemeriksaan validitas email menggunakan regular expression
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    // Fungsi untuk memeriksa dan menampilkan peringatan jika email tidak valid
    function checkEmailValidity() {
        var email = $("#email").val();
        if (email !== "" && !isValidEmail(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid Email',
                text: 'Please enter a valid email address!',
            });
        }
    }

    // Menjalankan fungsi checkEmailValidity() saat kehilangan fokus dari input email
    $("#email").on("blur", function() {
        checkEmailValidity();
    });
    // Menjalankan fungsi checkEmailValidity() saat tombol submit ditekan
    $("form").on("submit", function(event) {
        checkEmailValidity();

        // Jika email tidak valid, mencegah pengiriman form
        if (!isValidEmail($("#email").val())) {
            event.preventDefault();
        }
    });