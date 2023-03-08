@extends('layouts.main')
@section('main')
    <table class="table">
      <tr>
        <th>nama</th>
        <th>kode dosen</th>
        <th>email</th>
        <th>ACTION</th>
    </tr>
      @foreach ($dosens as $item)
      <tr>
        <td>{{$item->nama}}</td>
          <td>{{$item->kode_dosen}}</td>
          <td>{{$item->email}}</td>
          <td> <a href='/dosen/edit/{{$item->id}}' class="btn btn-warning">EDIT</a>
            <form method="post" action="/dosen/delete/{{$item->id}}" class="d-inline">
            @method('delete')
            @csrf
            <button type='submit' class="btn btn-danger">delete</button>
          </form>
          </td>
    </tr>
    @endforeach
    </table>

      <a href='/dosen/create' class="btn btn-primary">ADD</a>
      @endsection