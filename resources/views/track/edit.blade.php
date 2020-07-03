@extends('mody.tmp')

@section('content')

<div class="container">
	<h3>Edit Data Track</h3>
	<form action="{{ url('/track/' . $row->track_id) }}" method="POST" enctype="multipart/form-data">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>TRACK NAME</td>
				<td><input type="text" name="track_name" value="{{ $row->track_name }}"></td>
			</tr>
			
			<tr>
				<td>TRACK TIME</td>
				<td><input type="date" name="track_time" value="{{ $row->track_time }}"></td>
				</tr>

				<tr>
				<td>TRACK FILE</td>
				<td><input type="file" name="track_file" value="{{ $row->track_file }}"></td>
				</tr>


			<tr>
				<td></td>
				<td><input type="submit" name="UPDATE"></td>
			</tr>
		</table>
		
	</form>
	
</div>
@endsection