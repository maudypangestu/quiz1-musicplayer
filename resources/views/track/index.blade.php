@extends('mody.tmp')

@section('content')

<div class="module">
        <div class="module-head">
        	<h3>Daftar Track</h3>
        </div>

	<div class="module-body table">
	 <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
     <thead>
		<tr>
			<td>TRACK ID</td>
			<td>TRACK NAME</td>
			<td>ALBUM NAME</td>
			<td>TRACK TIME</td>
			<td>TRACK FILE</td>
			<td>AKSI</td>
		</tr>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->track_id }}</td>
		<td>{{ $row->track_name }}</td>
		<td>{{ $row->album_name }}</td>
		<td>{{ $row->track_time }}</td>
		<td>
			<audio controls>
				<source src="track_file\{{ $row->track_file }}.mp3" type="audio/mpeg">
			</audio>	
		</td>  
		
		<td>

			<form action="{{ url('track/' . $row->track_id) }}" method="POST">
				<a href="{{ url('track/' . $row->track_id . '/edit') }}" class="badge bg-info">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button class="badge bg-info">Hapus</button>
			</form>
			</td>
	</tr>
	@endforeach
	</tbody>
	</table>
</div>

</div>
</div>
<a href="{{ url('track/create') }}">Tambah Data</a>

@endsection