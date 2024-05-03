@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-sm-6">
              <br>
              <br>
                <div class="greeting">
                    What's <span class="special-greet">Poppin?</span>
                </div>
                <div class="main-title">
                    <p>M.Deru Anggoro D.A.</p>
                </div>
                <div class="short-desc">
                    <p>1204220046 <br>
                    </p>
                    <p>IS 05-03</p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ Vite::asset('resources/images/home/kick.png') }}" class="figure-profile img-fluid" alt="figure profile">
            </div>
        
            <div class="card mb-3">
    <img src="{{ Vite::asset('resources/images/home/travis scott.png') }}" class="figure-profile img-fluid" alt="figure profile">
  <div class="card-body">
    <h5 class="card-title">Air Jordan 1 Travis Scott Low</h5>
    <p class="card-text">Got best price with the best quality 100% OG.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">New Balance 327</h5>
    <p class="card-text">Got best price with the best quality 100% OG.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>
  <img src="{{ Vite::asset('resources/images/home/NB327.png') }}" class="figure-profile img-fluid" alt="figure profile">
</div>
        </div>
    </section>
@endsection
