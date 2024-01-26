@extends('layouts.main')
@section('container')

<h1 align="center"><i class="bi bi-journal-check"> RINGKASAN TUGAS </i><i class="bi bi-journal-check"></i>
</h1>
<h3 align="center">DI PT. TUNAS JAYA SANUR</h3>
<br>
<div class="p-3 mb-2 bg-black text-white">Bulan JULI :</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No : </th>
        <th scope="col">Kegiatan :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Pelepasan dan Pengarahan</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Belajar Google Data Studio</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Belajar PHP Dasar dan database</td>
      </tr>
    </tbody>
</table>
<br>
<div class="p-3 mb-2 bg-black text-white">Bulan AGUSTUS :</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No : </th>
        <th scope="col">Kegiatan :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Belajar PHP Dasar dan database</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Mengerjakan Latihan PHP Dasar</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Membuat akun Github</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Memperbaiki tampilan web perusahaan</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Belajar query join</td>
      </tr>
    </tbody>
</table>
<br>
<div class="p-3 mb-2 bg-black text-white">Bulan SEPTEMBER :</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No : </th>
        <th scope="col">Kegiatan :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Belajar PHP MVC</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Upload PHP MVC ke github</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Belajar Laravel</td>
      </tr>
    </tbody>
</table>
<br>
<div class="p-3 mb-2 bg-black text-white">Bulan OKTOBER :</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No : </th>
        <th scope="col">Kegiatan :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Belajar Laravel</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Menginstal TablePlus</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Menambah form input image di web perusahaan</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Membuat laporan</td>
      </tr>
    </tbody>
</table>
<br>
<div class="p-3 mb-2 bg-black text-white">Bulan NOVEMBER :</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No : </th>
        <th scope="col">Kegiatan :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Membuat laporan</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Pamit ke perusahaan</td>
      </tr>
    </tbody>
</table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/lpp" class="btn btn-primary mb-3">BACK</a>
        <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="laporan">1</a></li>
            <li class="page-item active"><a class="page-link" href="lpp">2</a></li>
            <li class="page-item active"><a class="page-link" href="logbook">3</a></li>
            <li class="page-item active"><a class="page-link" href="destgs">4</a></li>
            <li class="page-item active"><a class="page-link" href="end">5</a></li>
        </ul>
        <a href="/destgs" class="btn btn-primary mb-3">NEXT</a>
    </div>

@endsection
