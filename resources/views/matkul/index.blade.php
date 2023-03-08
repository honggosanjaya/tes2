@extends('layouts.main')
@section('main')
  <table class="table">
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>id Dosen</th>
      <th>id Mahasiswa</th>
      <th>ACTION</th>
    </tr>
    @foreach ($matkuls as $matkul)
      <tr>
        <td>{{ $matkul->kode }}</td>
        <td>{{ $matkul->nama }}</td>
        <td>{{ $matkul->matdos->nama }}</td>
        <td>{{ $matkul->matmah->nama }}</td>
        <td class="d-flex">
          <a href='/matkul/edit/{{ $matkul->id }}' class="btn btn-warning me-3">EDIT</a>
          <form method="post" action="/matkul/delete/{{ $matkul->id }}">
            @method('delete')
            @csrf
            <button type='submit' class="btn btn-danger">DELETE</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
