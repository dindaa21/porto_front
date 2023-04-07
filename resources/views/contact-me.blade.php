@extends('layouts.navbar')
@section('content')
@include('flash');
    <div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center row">
                <div class="col-2">
                    <img src="{{ $user->image }}" alt="">
                </div>
                <div class="col-10">
                    <p class="h3">
                        {{ $user->name }}
                    </p>
                    <span class="badge bg-primary mb-3">_____________</span>
                    <div>
                        <p class="h1">
                            Contact Me
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 2rem; margin-bottom: 5rem">
            <div class="d-flex justify-content-center align-items-center row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <form action="{{ route('contact-me') }}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            <div class="form-group col-5 mb-4">
                                <label>Nama
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Kamu.."
                                    name="name" />
                                {{-- @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="form-group col-5 mb-4">
                                <label>Email
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Masukkan Email Kamu.."
                                    name="email" />
                                {{-- @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="form-group col-10 mb-4">
                                <label>Subjek
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Job/Help/Something"
                                    name="subject" />
                                {{-- @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="form-group col-10 mb-4">
                                <label for="nama" class="col-form-label text-dark">Pesan <small class="text-danger">*</small></label>
                                <textarea class="form-control" id="message" name="message" rows="7">{{ old('message') }}</textarea>
                                {{-- @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="col-10">
                                <button type="submit" class="btn btn-primary" style="border-radius: 25px">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection