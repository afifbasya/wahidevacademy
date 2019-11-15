<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##CARA INSTALASI (WAJIB DIBACA)

<ul>
    <li>Download Project ini atau Clone</li>
    <li>Letakkan di htdocs untuk yang memakai xampp dan yang lain mengikuti</li>
    <li>Pastikan Laptop/PC anda sudah terinstall Composer</li>
    <li>Buka CMD masuk ke projek anda</li>
    <li>Jalan kan command "composer update" tunggu sampai selesai</li>
    <li>Rename env.example menjadi .env</li>
    <li>Jalan kan command "php artisan key:generate" tunggu sampai selesai</li>
    <li>Selesai</li>
<ul>

## BELAJAR LARAVEL PEMULA WAHIDEV ACADEMY

CRUD

CREATE = TAMBAH DATA (siswa/create)
READ   = MENAMPILKAN DATA (siswa)
UPDATE = UBAH DATA (siswa/{id}/edit)
DELETE = HAPUS DATA

SISTEM PENDATAAN SISWA WAHIDEV ACADEMY

SISWA
ID
NAMA = string
NIM = string

ALAMAT  = string 
JURUSAN = string
SEMESTER = string

TIPE DATA = CHAR, VARCHAR, INTEGER, FLOAT, DOUBLE, BOELAN, DATE, DATETIME,

TIPE DATA =
STRING/VARCHAR = HURUF+ANGKA TERBATAS (191 KARAKTER)
TEXT  = HURUF+ANGKA TIDAK TERBATAS
INTEGER = ANGKA YANG TIDAK DESIMAL
DOUBLE = ANGKA DESIMAL
BOOLEAN = KONDISI (0,1)
DATE = TANGGAL
TIMESTAMP


KONSEP MVC-ROUTE

MODEL = BERTUGAS UNTUK BERINTERAKSI DENGAN DATABASE
VIEW = MENAMPILKAN HTML,CSS, JAVASCRIPT
CONTROLLER = MENGOLAH DATA
ROUTE = URL UTAMA


GET = SISTEM DIKELUARKAN KE LAYAR
POST/PUT/DELETE = USER/PENGGUNA WEBSITE INPUT KE SISTEM


