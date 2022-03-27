_install() {
    npm i express @prisma/client cors
    [ -d "./prisma" ] && rm -r prisma
    npx prisma init
    echo "$(tput setaf 6)"Setting Databasenya ..."$(tput sgr0)"
    read -p "Nama Databasenya: " dbname
    read -p "Username Databasenya: " dbuser
    read -p "Password Databasenya: " dbpass
    ENV="DATABASE_URL=mysql://$dbuser:$dbpass@localhost:3306/$dbname"
    echo "$ENV" >.env
 
    SCHEMA='
    generator client {
        provider = "prisma-client-js"
    }

    datasource db {
        provider = "mysql"
        url      = env("DATABASE_URL")
    }
    '
    mkdir -p views
    echo "$SCHEMA" | sed 's/    *//g' >prisma/schema.prisma
    INDEX_FILE="
    const {PrismaClient} = require('@prisma/client');
    const prisma = new PrismaClient()
    const express = require('express')
    const app = express()
    const port = process.env.PORT || 3000
    const {api} = require('./api.js')

    app.use(express.static('views'))
    app.use(express.json())
    app.use(express.urlencoded({ extended: true }))
    app.use(cors())
    
    app.listen(port, () => console.log(\`Listening on port \${port}\`))
    "
    echo "$INDEX_FILE" | sed 's/    *//g' >index.js

    INDEX_VIEW='
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Apakabar</h1>
    </body>
    </html>
    '
    echo "$INDEX_VIEW" | sed 's/    *//g' >views/index.html
    SERVER_API='
    const express = require("express")
    const api = express.Router()

    api.get("/test", (req, res) => {
        res.send("Hello World!")
    })

    module.exports = {api}
    '
    echo "$SERVER_API" | sed 's/    *//g' >api.js
    prisma generate
    echo "$(tput setaf 2)Installation Successful$(tput sgr0)"


}
