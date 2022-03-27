-- CreateTable
CREATE TABLE `tbcustomer` (
    `id_customer` INTEGER NOT NULL,
    `nama_customer` VARCHAR(191) NOT NULL,
    `alamat_customer` VARCHAR(191) NOT NULL,
    `email_customer` VARCHAR(191) NOT NULL,
    `img_customer` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id_customer`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `tbcolor` (
    `id_color` INTEGER NOT NULL,
    `nama_color` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id_color`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
