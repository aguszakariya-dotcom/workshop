_git() {
    case $2 in
    push)
        git branch
        read -p "Masukkan nama branch anda?: " branch
        read -p "Apakah Branch Anda Sudah Benar (y/n):" branch
        if [[ $branch == "y" ]]; then
            git add .
            git commit -m "$(date)"
            git push origin $branch
            echo "$(tput setaf 2)Push Successful$(tput sgr0)"
        else
            echo "$(tput setaf 1)ok.. NO$(tput sgr0)"
        fi
        ;;
    pull)
        git fetch --all
        git branch
        read -p "Masukkan nama branch yang ingin anda tarik?: " branch
        git pull origin $branch
        ;;
    *)
        echo 'perintah yang tersedia : push , pull'
        ;;
    esac
}
