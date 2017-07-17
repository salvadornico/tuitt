@extends('layouts/applayout')

@section('title')
	Create New Article
@endsection

@section('main_content')

	<div class="container">
		
		<h1>
			Create a new article
		</h1>

		<form action="" method="POST">
			{{ csrf_field() }}
			Title: <input type="text" name="title">
			<br>
			Content:
			<br>
			<textarea name="content"></textarea>
			<br>
			<input type="submit" class="btn green"></input>
		</form>

	</div>


@endsection