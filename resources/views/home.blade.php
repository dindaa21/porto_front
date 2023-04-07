@extends('layouts.navbar')

@section('content')
@include('flash')

<div class="container ">
    <div class="row d-flex justify-content-center">
      <div class="col-9" style="margin-bottom: 7rem">
        <p class="h1" style="color: hsl(234, 81%, 63%)">
            {!! $title !!}
        </p>
      </div>
    </div>
</div>

<div class="d-flex justify-content-around">           
  <div>
    <img src="{{ asset('images/selfie.jpg') }}" alt="" class="img" width="600">
  </div>
  <div class="container row align-items-center" style="background-color: #ffb7e9">
    <div class="col-12 shadow-lg pt-3 pb-3 bg-secondary rounded">
      <div class="card">
        <div class="card-body">
          <p class="card-text">
            {!! $profile->description !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Portofolio --}}
<div class="container">
  <div>
    @include('portofolio.portofolio')
  </div>
  
  <div>
    <p class="text-center mb-5 mt-3 h4">
      <a href="{{ route('portofolio') }}">
        <span class="badge text-light" style="background-color: #ff00cc"><i class="fa-regular fa-hand-pointer fa-lg"></i> Lihat Semuanya...</span>
      </a>
    </p>
  </div>
</div>

@endsection