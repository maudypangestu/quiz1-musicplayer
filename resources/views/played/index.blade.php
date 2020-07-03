@extends('mody.tmp')
@section('content')

<div class="module">
        <div class="module-head">
        	<h3>Daftar Played</h3>
        </div>

	<div class="module-body table">
	 <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
     <thead>
		<tr>
			<td>PLAYED ID</td>
			<td>TRACK NAME</td>
			<td>PLAYED DATE</td>
			<td>AKSI</td>
		</tr>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->play_id }}</td>
		<td>{{ $row->track_name }}</td>
		<td>{{ $row->play_date }}</td>
		<td>

			<form action="{{ url('played/' . $row->play_id) }}" method="POST">
				<a href="{{ url('played/' . $row->play_id . '/edit') }}" class="badge bg-info">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button class="badge bg-info" >Hapus</button>
			</form>
			</td>

	</tr>
	@endforeach
	</tbody>
	</table>
</div>

</div>
</div>

<a href="{{ url('played/create') }}">Tambah Data</a>
@endsection