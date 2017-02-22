@extends('layouts.app')
@section('content')
 <div class="container">
            <div class="row">
             	<div class="col-md-5 col-md-offset-0">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h1><center>Daftar User</center></h1></div>
                        <div class="panel-body">
                            <table border="1" class="table table-striped table-border table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Type User</th>
									</tr>
								</thead>
								@php $no=1; @endphp
								<tbody>
									@foreach($pegawai as $data)
									<tr>
										<td>{{$no++}}</td>
										<td>{{$data->user->name}}</td>
										<td>{{$data->user->email}}</td>
										<td>{{$data->user->type_user}}</td>

										
									</tr>
									@endforeach
								</tbody>
							</table>
							<a  href="{{url('pegawai/create')}}" class="btn btn-primary form-control">Tambah</a>

                        </div>
                    </div>
             	</div>
             	<div class="col-md-7 col-md-offset-0">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h1><center>Daftar Pegawai</center></h1></div>
                        <div class="panel-body">
                            <table border="1" class="table table-striped table-border table-hover">
								<thead>
									<tr>
										<th>NIP</th>
										<th>Nama Pegawai</th>
										<th>Nama Golongan</th>
										<th>Nama Jabatan</th>
										<th>Photo</th>
										<th colspan="2"><center>Action</center></th>
									</tr>
								</thead>
								<tbody>
									@foreach($pegawai as $data)
									<tr>
										<td>{{$data->nip}}</td>
										<td>{{$data->user->name}}</td>
										<td>{{$data->golongan->nama_g}}</td>
										<td>{{$data->jabatan->nama_j}}</td>
										<td>
											<li class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                                 Lihat Poto <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <img src="assets/image/{{$data->photo}}" height="150" width="125"></td>
                                    </li>
                                </ul>
                            </li>
										
										<td>
											<a href="{{route('pegawai.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
										</td>
										<td>
											{!! Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$data->id]]) !!}
											{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<a  href="{{url('pegawai/create')}}" class="btn btn-primary form-control">Tambah</a>

                        </div>
                    </div>
             	</div>
            </div>
        </div>

	
@endsection