@extends('layouts.app')
@section('content')
<h1>Edit Penggajian</h1>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit penggajian</div>
                <div class="panel-body">
                    {!! Form::model($penggajian,['method'=>'PATCH','route'=>['penggajian.update',$penggajian->id]])!!}
                        {!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('tunjangan_pegawai_id') ? ' has-error' : '' }}">
                            <label for="tunjangan_pegawai_id" class="col-md-4 control-label">Tunjangan Pegawai Id</label>

                            <div class="col-md-6">
                                {!! Form::text('tunjangan_pegawai_id',null,['class'=>'form-control']) !!}
                                @if ($errors->has('tunjangan_pegawai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tunjangan_pegawai_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
                            <label for="jumlah_jam_lembur" class="col-md-4 control-label">Jumlah Jam Lembur</label>

                            <div class="col-md-6">
                                {!! Form::text('jumlah_jam_lembur',null,['class'=>'form-control']) !!}

                                @if ($errors->has('jumlah_jam_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_jam_lembur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_uang_lembur') ? ' has-error' : '' }}">
                            <label for="jumlah_uang_lembur" class="col-md-4 control-label">Jumlah Uang Lembur</label>

                            <div class="col-md-6">
                                {!! Form::text('jumlah_uang_lembur',null,['class'=>'form-control']) !!}

                                @if ($errors->has('jumlah_uang_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_uang_lembur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
                            <label for="gaji_pokok" class="col-md-4 control-label">Gaji Pokok</label>

                            <div class="col-md-6">
                                {!! Form::text('gaji_pokok',null,['class'=>'form-control']) !!}

                                @if ($errors->has('gaji_pokok'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gaji_pokok') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_pengambilan') ? ' has-error' : '' }}">
                            <label for="tanggal_pengambilan" class="col-md-4 control-label">Tanggal Pengambilan</label>

                            <div class="col-md-6">
                                {!! Form::text('tanggal_pengambilan',null,['class'=>'form-control']) !!}

                                @if ($errors->has('tanggal_pengambilan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_pengambilan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status_pengambilan') ? ' has-error' : '' }}">
                            <label for="status_pengambilan" class="col-md-4 control-label">Status Pengambilan</label>

                            <div class="col-md-6">
                                {!! Form::text('status_pengambilan',null,['class'=>'form-control']) !!}

                                @if ($errors->has('status_pengambilan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status_pengambilan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('petugas_penerima') ? ' has-error' : '' }}">
                            <label for="petugas_penerima" class="col-md-4 control-label">Petugas Penerima</label>

                            <div class="col-md-6">
                                {!! Form::text('petugas_penerima',null,['class'=>'form-control']) !!}

                                @if ($errors->has('petugas_penerima'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('petugas_penerima') }}</strong>
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