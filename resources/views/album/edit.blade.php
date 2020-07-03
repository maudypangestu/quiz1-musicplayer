@extends('mody.tmp')
@section('content')

<div class="container">
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table>

			
			<tr>
				<td>ALBUM NAME</td>
				<td><input type="text" id="album_name" name="album_name" value="{{ $row->album_name }}"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="UPDATE"></td>
			</tr>
		</table>
		
	</form>
	
</div>
@endsection