@extends('layouts.app')
@section('content')
<h1>Edit Tunjangan</h1>
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>
                <div class="panel-body">
					{!! Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_t') ? ' has-error' : '' }}">
                            <label for="kode_t" class="col-md-4 control-label">Kode Tunjangan</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_t',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <select name="golongan_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($golongan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_g}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>

                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($jabatan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_j}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                {!! Form::text('status',null,['class'=>'form-control']) !!}
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                            <label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>

                            <div class="col-md-6">
                                {!! Form::text('jumlah_anak',null,['class'=>'form-control']) !!}
                                @if ($errors->has('jumlah_anak'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_anak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('besar_uang') ? ' has-error' : '' }}">
                            <label for="besar_uang" class="col-md-4 control-label">Besar Uang</label>

                            <div class="col-md-6">
                                {!! Form::text('besar_uang',null,['class'=>'form-control']) !!}
                                @if ($errors->has('besar_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besar_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
						{!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection