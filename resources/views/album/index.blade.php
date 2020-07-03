@extends('mody.tmp')

@section('content')



<div class="module">
        <div class="module-head">
        	<h3>Daftar Album</h3>
        </div>

	<div class="module-body table">
	 <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
     <thead>
		<tr>
        	<th>ALBUM ID</th>
			<th>ARTIST NAME</th>
			<th>ALBUM NAME</th>	
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->artist_name}}</td>
			<td>{{ $row->album_name }}</td>
			<td>

			<form action="{{ url('album/' . $row->album_id) }}" method="POST">
				<a href="{{ url('album/' . $row->album_id . '/edit') }}" class="badge bg-info" >Edit</a>
			
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

<a href="{{ url('album/create') }}">Tambah Data</a>

@endsection