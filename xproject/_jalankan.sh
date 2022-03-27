_jalankan() {
    case $2 in
    nodejs)
        nodemon index.js
        ;;
    php)
        php -S localhost:4000 -t ./views_php
        ;;
    *)
        echo 'perintah yang tersedia : 
        nodejs      untuk menjalankan server nodejs, 
        php,        menjalankan server php'
        ;;
    esac
}
