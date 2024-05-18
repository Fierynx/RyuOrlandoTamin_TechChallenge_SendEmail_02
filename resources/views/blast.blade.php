<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Email Blast</title>
</head>
<body>
  <div class="container-lg p-4 mt-5 shadow-lg mb-5 bg-white rounded" style="max-width: 700px;">
    @if (session('success'))
      <div id="success" class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <form method="POST" action="/post/blast">
      @csrf
      <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">
        @error('subject')
          <div class="alert alert-danger mt-3 p-1 text-center">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
        @error('content')
          <div class="alert alert-danger mt-3 p-1 text-center">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary rounded">Submit</button>
        <a href="/notify" class="btn btn-outline-dark">Notify Me</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>