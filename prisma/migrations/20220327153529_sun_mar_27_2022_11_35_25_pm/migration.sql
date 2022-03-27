/*
  Warnings:

  - You are about to drop the column `nama_color` on the `tbcolor` table. All the data in the column will be lost.
  - You are about to drop the column `alamat_customer` on the `tbcustomer` table. All the data in the column will be lost.
  - You are about to drop the column `email_customer` on the `tbcustomer` table. All the data in the column will be lost.
  - You are about to drop the column `img_customer` on the `tbcustomer` table. All the data in the column will be lost.
  - Added the required column `id_sample` to the `tbcolor` table without a default value. This is not possible if the table is not empty.
  - Added the required column `warna` to the `tbcolor` table without a default value. This is not possible if the table is not empty.
  - Added the required column `alamat` to the `tbcustomer` table without a default value. This is not possible if the table is not empty.

*/
-- AlterTable
ALTER TABLE `tbcolor` DROP COLUMN `nama_color`,
    ADD COLUMN `id_sample` INTEGER NOT NULL,
    ADD COLUMN `warna` VARCHAR(191) NOT NULL;

-- AlterTable
ALTER TABLE `tbcustomer` DROP COLUMN `alamat_customer`,
    DROP COLUMN `email_customer`,
    DROP COLUMN `img_customer`,
    ADD COLUMN `alamat` VARCHAR(191) NOT NULL;

-- CreateTable
CREATE TABLE `tbsample` (
    `id_sample` INTEGER NOT NULL,
    `id_customer` INTEGER NOT NULL,
    `style` VARCHAR(191) NOT NULL,
    `qty_meter` VARCHAR(191) NOT NULL,
    `acc1` VARCHAR(191) NOT NULL,
    `acc2` VARCHAR(191) NOT NULL,
    `note_sample` VARCHAR(191) NOT NULL,
    `image` VARCHAR(191) NOT NULL,
    `image2` VARCHAR(191) NOT NULL,
    `code_sample` VARCHAR(191) NOT NULL,
    `finish_sample` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id_sample`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `tbfabric` (
    `id_fabric` INTEGER NOT NULL,
    `bahan` INTEGER NOT NULL,

    PRIMARY KEY (`id_fabric`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `tbproduksi` (
    `id_produksi` INTEGER NOT NULL,
    `id_sample` INTEGER NOT NULL,
    `id_fabric` INTEGER NOT NULL,
    `id_color` INTEGER NOT NULL,
    `qty_order` VARCHAR(191) NOT NULL,
    `size` VARCHAR(191) NOT NULL,
    `code_produksi` VARCHAR(191) NOT NULL,
    `note_produksi` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id_produksi`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
