@extends('mody.tmp')
@section('content')

<div class="container">
	<h3>Tambah Data Played</h3>
	<form action="{{ route('played.store') }}" method="POST" role="form">
		@csrf
		<table>
			<tr>
				<td>TRACK ID</td>
				<td><select name="play_id_track" id="play_id_track">
					@foreach($rows as $row)
					<option name="play_id_track" id="play_id_track" value="{{ $row->track_id }}">{{ $row->track_name }}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td>PLAY DATE</td>
				<td><input type="date" id="play_date" name="play_date"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN">SIMPAN</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection