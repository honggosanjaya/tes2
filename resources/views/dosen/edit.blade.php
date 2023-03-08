@extends('layouts.main')
@section('main')
    <form action='/dosen/{{$dosen->id}}' method='post'>
      @method('put')
        @csrf
        <div class="mb-3">
          <label  class="form-label">nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                name="nama" value="{{ old('nama',$dosen->nama) }}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">kode dosen</label>
            <input type="text" class="form-control @error('kode_dosen') is-invalid @enderror" id="kode_dosen"
            name="kode_dosen" value="{{ old('kode_dosen',$dosen->kode_dosen) }}">
          @error('kode_dosen')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
            name="email" value="{{ old('email',$dosen->email) }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endsection