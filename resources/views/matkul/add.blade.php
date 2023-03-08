@extends('layouts.main')
@section('main')
  <form action='/matkul' method='post'>
    @csrf
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
        value="{{ old('nama') }}">
      @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">kode</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode"
        value="{{ old('kode') }}">
      @error('kode')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="id_Dosen" class="form-label">id dosen</label>
      <select class="form-select" name="id_Dosen">
        @foreach ($dosens as $dosen)
          @if (old('id_Dosen') == $dosen->id)
            <option value="{{ $dosen->id }}" selected>{{ $dosen->nama }}</option>
          @else
            <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
          @endif
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="id_Mahasiswa" class="form-label">id mahasiswa</label>
      <select class="form-select" name="id_Mahasiswa">
        @foreach ($mahasiswas as $mahasiswa)
          @if (old('id_Mahasiswa') == $mahasiswa->id)
            <option value="{{ $mahasiswa->id }}" selected>{{ $mahasiswa->nama }}</option>
          @else
            <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
          @endif
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
