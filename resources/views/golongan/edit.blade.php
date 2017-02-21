@extends('layouts.app')
@section('content')
<h1>Edit Golongan</h1>
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit golongan</div>
                <div class="panel-body">
					{!! Form::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_g') ? ' has-error' : '' }}">
                            <label for="kode_g" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_g',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_g'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_g') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_g') ? ' has-error' : '' }}">
                            <label for="nama_g" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                {!! Form::text('nama_g',null,['class'=>'form-control']) !!}

                                @if ($errors->has('nama_g'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_g') }}</strong>
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