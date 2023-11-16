@extends('layouts.main')
@section('container')
    <h1 align="center"><i class="bi bi-pc-display-horizontal"> DESKRIPSI TUGAS </i><i class="bi bi-pc-display-horizontal"></i>
    </h1>
    <h3 align="center">DI PT. TUNAS JAYA SANUR</h3>
    <br>
    <div class="card-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Alat dan Bahan :</h5>
            <p class="card-text">1. Visual Studio Code <br> 2. My SQL Workbench <br>3. xampp <br> 4. Table Plus <br> 5. Git
                bash <br> 6. Laragon</p>
        </div>
    </div>
    <div class="text-center">
        <img src="img/{{ $image }}" class="img-fluid" alt="...">
        <img src="img/{{ $ime }}" class="img-fluid" alt="...">
        <img src="img/{{ $im }}" class="img-fluid" alt="...">
        <img src="img/{{ $ini }}" class="img-fluid" alt="...">
        <img src="img/{{ $aku }}" class="img-fluid" alt="...">
        <img src="img/{{ $kaka }}" class="img-fluid" alt="...">
    </div>
    <div class="card">
        <div class="card-header text-center">
            Langkah - langkah menginstal Composer & Laravel :
        </div>
        <blockquote class="blockquote mb-0">
            <h4><b>1. instal Composer</b></h4>
            <p>Buka terminal atau command prompt dan jalankan perintah berikut untuk menginstal Composer:</p>
            <img src="img/{{ $lala }}" class="img-fluid text-center" width="300px" height="500px" alt="...">
            <p>1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br> 2. php composer-setup.php
                <br>3. php -r "unlink('composer-setup.php');" </p>
            <br>
            <h4><b>1. instal Laravel</b></h4>
            <p>Buka terminal atau command prompt dan jalankan perintah berikut untuk menginstal Laravel:</p>
            <img src="img/{{ $lala }}" class="img-fluid text-center" width="300px" height="500px" alt="...">
            <p>1. composer create-project --prefer-dist laravel/laravel nama-proyek-anda
                <br> 2. cd nama-proyek-anda <br>3. cd nama-proyek-anda <br>4. php artisan serve
            </p>
    </div>
    <br>
    <div class="card">
        <div class="card-header text-center">
            Langkah - langkah menambah inputan image ttd :
        </div>
        <blockquote class="blockquote mb-0">
            <h4><b>1. Download database web perusahaan</b></h4>
            <h4><b>2. Buka Git Bash, lalu jalankan perintah berikut satu persatu :</b></h4>
            <img src="img/{{ $lala }}" class="img-fluid text-center" width="300px" height="500px" alt="...">
            <p>1. cp .env.example .env <br> 2. php artisan key:generate <br> 3. php artisan changepassword:admin 123 <br> 4.
                git checkout feat/upload-ttd <br> 5. git checkout origin/feat/upload-ttd</p>
            <h4><b>3. Lalu buka Visual Studio Code dan isi inputan image sebagai berikut :</b></h4>
            <div>
            <img src="img/{{ $li }}" class="rounded float-start" width="400px" height="200px" alt="">
            <img src="img/{{ $la }}" class="rounded float-end" width="400px" height="200px" alt="...">
            </div>
            <div>
            <blockquote class="blockquote mb-0">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <h4><b>4. Terakhir buka Terminal dan isi dengan berikut :</b></h4>
            <p>1. git add . <br>2. git commit -m “upload file” <br> 3. git push
                </p>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/lpp" class="btn btn-primary mb-3">BACK</a>
                <a href="/end" class="btn btn-primary mb-3">NEXT</a>
            </div>
        @endsection
