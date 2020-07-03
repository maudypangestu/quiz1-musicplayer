@extends('mody.tmp')

@section('content')

<div class="container">
	<h3>Edit Data Played</h3>
	<form action="{{ url('/played/' . $row->play_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>PLAY DATE</td>
				<td><input type="text" name="play_date" value="{{ $row->play_date }}"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="UPDATE"></td>
			</tr>
		</table>
		
	</form>
	
</div>
@endsection