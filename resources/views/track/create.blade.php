@extends('mody.tmp')
@section('content')
<div class="container">
	<h3>Tambah Data Track</h3>
	<form action="{{ route('track.store') }}" method="POST" role="form" enctype="multipart/form-data">
		@csrf
		<table>
				<tr>
				<td>TRACK NAME</td>
				<td><input type="text" id="track_name" name="track_name"></td>
				</tr>
				<tr>
					<td>ALBUM ID</td>
				<td><select name="track_id_album" id="track_id_album">
					@foreach($rows as $row)
						<option name="track_id_album" id="track_id_album" value="{{ $row->album_id }}">{{ $row->album_name }}</option>
					@endforeach
					</select>
				</td>
			</tr>

				<tr>
				<td>TRACK TIME</td>
				<td><input type="date" id="track_time" name="track_time"></td>
				</tr>

				<tr>
				<td>TRACK FILE</td>
				<td><input type="file" id="track_file" name="track_file"></td>
				</tr>

			
			
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN">Simpan</button></td>
			</tr>
			
		</table>
	</form>
</div>
@endsection