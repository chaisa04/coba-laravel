@extends('layouts.main')
@section('container')
    <h1 align="center"><i class="bi bi-journal-text"> PRESENTASI LAPORAN PRAKRIN </i><i class="bi bi-journal-text"></i></h1>
    <h3 align="center">DI PT. TUNAS JAYA SANUR</h3>
    <br>
    <img src="img/{{ $image }}" class="rounded mx-auto d-block" alt="" width="200">
    <br>
    <p class="text-center"><b>DI PERSEMBAHKAN OLEH </b></p>
    <p class="text-center"><b>Nama : Chaisa Maulidia </b></p>
    <p class="text-center"><b>NIS : 6235 </b></p>
    <p class="text-center"><b>Kelas : XI RPL 3 </b></p>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="laporan">1</a></li>
            <li class="page-item active"><a class="page-link" href="lpp">2</a></li>
            <li class="page-item active"><a class="page-link" href="logbook">3</a></li>
            <li class="page-item active"><a class="page-link" href="destgs">4</a></li>
            <li class="page-item active"><a class="page-link" href="end">5</a></li>
        </ul>
        <a href="/lpp" class="btn btn-primary mb-3">NEXT</a>
    </div>


@endsection
