@extends('layouts.main')
@section('container')
<h1 align="center"><i class="bi bi-house-door"> INFORMASI </i><i class="bi bi-house-door"></i></h1>
    <h3 align="center">PT. TUNAS JAYA SANUR</h3>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/{{ $image }}" class="d-block" width="2000px" height="600px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/{{ $ime }}" class="d-block" width="2000px" height="600px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/{{ $im }}" class="d-block" width="2000px" height="600px" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          PT. TUNAS JAYA SANUR
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><b>Pendiri :</b> I Made Dapir</p>
            <p><b>Alamat :</b> Jln. By Pass Ngurah Rai No, 21 Sesetan,
                Kelurahan Sesetan, Denpasar Selatan 80223 Bali</p>
            <p><b>Website :</b> pttjs@pttjs.com</p>
            <p><b>Logo :</b><img src="img/{{ $ini }}" width="200px" height="300px" alt=""></p>

            <footer class="blockquote-footer">PT. TUNAS JAYA SANUR adalah perusahaan yang  bergerak dalam bidang jasa kontraktor pertambangan, jasa penambangan umum, pemeliharaan dan perawatan peralatan.<cite title="Source Title"></cite></footer>
          </blockquote>
        </div>
      </div>
    </br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/laporan" class="btn btn-primary mb-3">BACK</a>
        <a href="/destgs" class="btn btn-primary mb-3">NEXT</a>
    </div>
@endsection
