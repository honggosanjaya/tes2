<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action='/mahasiswa' method='post'>
        @csrf
        <div class="mb-3">
          <label  class="form-label">nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                name="nama" value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">NIM</label>
            <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM"
            name="NIM" value="{{ old('NIM') }}">
          @error('NIM')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
            name="jurusan" value="{{ old('jurusan') }}">
          @error('jurusan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
            name="email" value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>