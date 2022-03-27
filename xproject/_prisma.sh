_prisma() {
    case $2 in
    generate)
        npx prisma generate
        ;;
    migrate)
        npx prisma migrate dev --name "$(date)"
        npx prisma generate
        ;;
    *)
        echo '
        perintah yang tersedia : 
        generate ,  untuk mengenerate schema prisma keadlan kodingan javascript
        migrate,    untuk migrasi database prisma setelalh anda membuat atau mengedit schema
        
        '   
        ;;
    esac

}
