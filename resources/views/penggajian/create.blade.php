@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah penggajian</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tunjangan_pegawai_id') ? ' has-error' : '' }}">
                            <label for="tunjangan_pegawai_id" class="col-md-4 control-label">Tunjangan Pegawai Id</label>

                            <div class="col-md-6">
                                <input id="tunjangan_pegawai_id" type="text" class="form-control" name="tunjangan_pegawai_id" value="{{ old('tunjangan_pegawai_id') }}"  autofocus>

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
                                <input id="jumlah_jam_lembur" type="jumlah_jam_lembur" class="form-control" name="jumlah_jam_lembur" value="{{ old('jumlah_jam_lembur') }}" >

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
                                <input id="jumlah_uang_lembur" type="jumlah_uang_lembur" class="form-control" name="jumlah_uang_lembur" >

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
                                <input id="gaji_pokok" type="gaji_pokok" class="form-control" name="gaji_pokok" >

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
                                <input id="tanggal_pengambilan" type="tanggal_pengambilan" class="form-control" name="tanggal_pengambilan" >

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
                                <input id="status_pengambilan" type="status_pengambilan" class="form-control" name="status_pengambilan" >

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
                                <input id="petugas_penerima" type="petugas_penerima" class="form-control" name="petugas_penerima" >

                                @if ($errors->has('petugas_penerima'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('petugas_penerima') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection