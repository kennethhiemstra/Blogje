@extends ('layouts.layout')

@section ('content')

	<div class="col-md-8">

		<h1>Inloggen</h1>

		<form method="POST" action="/login">
			
			{{ csrf_field() }}


		<div class="form-group">
			
			<label for="email">Email Adress:</label>
			
			<input type="email" class="form-control" id="email" name="email" required>

		</div>

		<div class="form-group">
			
			<label for="password">Wachtwoord:</label>
			
			<input type="password" class="form-control" id="password" name="password" required>

		</div>

		<div class="form-group">

			<button type="submit" class="btn btn-primary">Aanmelden</button>

			<a href="/register" class="ml-2">Registreren</a>

		</div>

		@include ('layouts.errors')


		</form>

	</div>

@endsection