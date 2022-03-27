#!/usr/bin/env bash

for file in xproject/*sh; do
    . $file
done

if [[ $# -eq 0 ]]; then
    _bantuan
    exit 1
else
    case $1 in
    install)
        _install
        ;;
    bantuan)
        _bantuan $@
        ;;
    jalankan)
        nodemon index.js
        ;;
    git)
        _git $@
        ;;
    *)
        echo 'perintah belum ada , silahkan ketik bantuan untuk menampilkan bantuan'
        ;;
    esac
fi
