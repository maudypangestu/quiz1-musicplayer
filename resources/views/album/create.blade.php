@extends('mody.tmp')

@section('content')
<div class="container">
	<h3>Tambah Data Album</h3>
	<form action="{{ route('album.store') }}" method="POST" role="form">
		@csrf
		<table>
			<tr>
				<td>ARTIST ID</td>
				<td><select name="album_artist_id" id="album_artist_id">
					@foreach($rows as $row)
						<option name="album_artist_id" id="album_artist_id" value="{{ $row->artist_id }}">{{ $row->artist_name }}</option>
					@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<td>ALBUM NAME</td>
				<td><input type="text" id="album_name" name="album_name"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN">Simpan</button></td>
			</tr>
			
		</table>
	</form>
</div>
@endsection