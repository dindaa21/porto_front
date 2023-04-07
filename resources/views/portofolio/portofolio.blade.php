{{-- card-card project --}}
<div class="" style="margin-top: 3rem;">
    <div class="container">
      {{-- judul --}}
      <div class="d-flex justify-content-center my-5">
        <p class="h1 mx-auto">
          Project Yang Dikerjakan
        </p>
      </div>
  
      {{-- cardnya --}}
  
      {{-- <div class="container"> --}}
        <div class="row">
  
          @foreach ($project as $pro)
            <div class="col-4 mb-3">
              <div class="card">
                <img src="{{ $pro->image }}" class="image-fluid" alt="...">
                <div class="card-body">
                  <p class="card-title h3">{{ $pro->title }}</p>
                  <p class="card-text text-secondary">{!! $pro->description !!}</p>
                </div>
              </div>
            </div>
          @endforeach
  
        </div>
      {{-- </div> --}}
    </div>
  </div>