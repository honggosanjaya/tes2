<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <table class="table">
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>id Dosen</th>
      <th>id Mahasiswa</th>
    </tr>
    @foreach ($matkuls as $matkul)
      <tr>
        <td>{{ $matkul->kode }}</td>
        <td>{{ $matkul->nama }}</td>
        <td>{{ $matkul->matdos->nama }}</td>
        <td>{{ $matkul->matmah->nama }}</td>
        <td>
          <a href='/matkul/edit/{{ $matkul->id }}' class="btn btn-warning">EDIT</a>
          <form method="post" action="/matkul/delete/{{ $matkul->id }}">
            @method('delete')
            @csrf
            <button type='submit' class="btn btn-danger">DELETE</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>

  <a href='/matkul/create' class="btn btn-primary">ADD</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
