@extends ('layouts.layout')

@section ('content')

	<div class="col-sm-8 blog-main">

		<h1>Maak een post aan</h1>

<hr>

<form method="POST" action="/posts">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Titel</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">Tekst</label>
    <textarea id="body" name="body" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Plaats</button>
  </div>

  @include('layouts.errors')

  </div>

</form>

@endsection