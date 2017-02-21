@extends('layouts.app')
@section('content')
<h1>Daftar Penggajian</h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Tunjangan Pegawai Id</th>
				<th>Jumlah Jam Lembur</th>
				<th>Jumlah Uang Lembur</th>
				<th>Gaji Pokok</th>
				<th>Tanggal Pengambilan</th>
				<th>Status Pengambilan</th>
				<th>Petugas Penerima</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($penggajian as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->tunjangan_pegawai_id}}</td>
				<td>{{$data->jumlah_jam_lembur}}</td>
				<td>{{$data->jumlah_uang_lembur}}</td>
				<td>{{$data->gaji_pokok}}</td>
				<td>{{$data->tanggal_pengambilan}}</td>
				<td>{{$data->status_pengambilan}}</td>
				<td>{{$data->petugas_penerima}}</td>
				<td>
					<a href="{{route('penggajian.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('penggajian/create')}}" class="btn btn-primary form-control">Tambah</a>

@endsection