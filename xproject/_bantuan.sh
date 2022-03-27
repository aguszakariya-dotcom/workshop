_bantuan(){
   echo "$(tput setaf 3)"BACA PENTING !"$(tput sgr0)"
   
    echo "
    bantuan project , 

    Penggunaan : $0 [OPTION] [ARGUMENT]
    bantuan     memunculkan bantuan
    install     untuk menginstal semua keperluan server , dari pengaturan database
                api, serta viewnya 
    git         perintah untuk git , untuk melihat perintah yang tersedia 
                jalankan [$0 git] untuk melihat perintah yang tersedia
    prisma      menjalankan prisma otomatis , 
                seperti generate , migrate , dan lainnya secara otomatis
                lihat perintah [$0 prisma] untuk melihat perintah yang tersedia


    - untuk menjalankan server ketik di terminal dengan perintah [$0 jalankan]

    - untuk berhenti ketik [CTRL+C] pada terminal

    contoh : [$0 bantuan] untuk menampilkan pesan bantuan ini
    "
}