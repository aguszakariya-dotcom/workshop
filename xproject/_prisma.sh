_prisma() {
    case $2 in
    generate)
        npx prisma generate
        ;;
    migrate)
        npx prisma migrate dev --name "$(date)"
        ;;
    *)
        echo 'perintah yang tersedia : generate , migrate'
        ;;
    esac

}
