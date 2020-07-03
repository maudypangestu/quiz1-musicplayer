@extends('mody.tmp')
@section('content')

<div class="container">
	<h3>Tambah Data Artist</h3>
	<form action="{{ route('artist.store') }}" method="POST" role="form">
		@csrf
		<table>
			<tr>
				<td>ARTIST NAME</td>
				<td><input type="text" id="artist_name" name="artist_name"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN">Simpan</button></td>
			</tr>
			
		</table>
	</form>
</div>
@endsection