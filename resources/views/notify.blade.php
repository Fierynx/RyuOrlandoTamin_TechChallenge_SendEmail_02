<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Notify Me</title>
</head>
<body>
  <div class="container-lg p-4 mt-5 shadow-lg mb-5 bg-white rounded" style="max-width: 700px;">
    @if (session('success'))
      <div id="success" class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <form method="POST" action="/post/notify">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
        @error('email')
          <div class="alert alert-danger mt-3 p-1 text-center">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary rounded">Notify Me</button>
        <a href="/blast" class="btn btn-outline-dark">Email Blast</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>