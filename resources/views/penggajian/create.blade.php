@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'penggajian']) !!}

                    <div class="form-group{{ $errors->has('kode_tunjangan_pegawai') ? ' has-error' : '' }}">
                        <label for="kode_tunjangan_pegawai" class="col-md-4 control-label">Kode Tunjangan Pegawai</label>
                            <div class="col-md-6">
                                <select name="kode_tunjangan_pegawai" class="form-control">
                                    @foreach($tunjangan_pegawai as $tunj)
										<option value="{!! $tunj->id !!}" class="form-control" required>{!! $tunj->kode_tunjangan_pegawai !!}</option>
									@endforeach
                                </select>
                            </div>
                    </div><br>

                    <!--<div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                        <label for="pegawai_id" class="col-md-4 control-label">NIP Pegawai</label>
                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    @foreach($Pegawai as $mata)
										<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nip !!}</option>
									@endforeach
                                </select>
                            </div>
                    </div><br>-->

                    <div class="form-group{{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
                        <label for="jumlah_jam_lembur" class="col-md-4 control-label">Jumlah Jam Lembur</label> <div class="col-md-6">
                            <input id="jumlah_jam_lembur" type="text" class="form-control" name="jumlah_jam_lembur" value="{{ old('jumlah_jam_lembur') }}" required autofocus>

                            @if ($errors->has('jumlah_jam_lembur'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_jam_lembur') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('jumlah_uang_lembur') ? ' has-error' : '' }}">
                        <label for="jumlah_uang_lembur" class="col-md-4 control-label">Jumlah Uang Lembur</label> <div class="col-md-6">
                            <input id="jumlah_uang_lembur" type="text" class="form-control" name="jumlah_uang_lembur" value="{{ old('jumlah_uang_lembur') }}" required autofocus>

                            @if ($errors->has('jumlah_uang_lembur'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_uang_lembur') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
                        <label for="gaji_pokok" class="col-md-4 control-label">Gaji Pokok</label> <div class="col-md-6">
                            <input id="gaji_pokok" type="text" class="form-control" name="gaji_pokok" value="{{ old('gaji_pokok') }}" required autofocus>

                            @if ($errors->has('gaji_pokok'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gaji_pokok') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('total_gaji') ? ' has-error' : '' }}">
                        <label for="total_gaji" class="col-md-4 control-label">Total Gaji</label> <div class="col-md-6">
                            <input id="total_gaji" type="text" class="form-control" name="total_gaji" value="{{ old('total_gaji') }}" required autofocus>

                            @if ($errors->has('total_gaji'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('total_gaji') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('tanggal_pengambilan') ? ' has-error' : '' }}">
                        <label for="tanggal_pengambilan" class="col-md-4 control-label">Tanggal Pengambilan</label> <div class="col-md-6">
                            <input id="tanggal_pengambilan" type="date" class="form-control" name="tanggal_pengambilan" value="{{ old('tanggal_pengambilan') }}" required autofocus>

                            @if ($errors->has('tanggal_pengambilan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tanggal_pengambilan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('status_pengambilan') ? ' has-error' : '' }}">
                        <label for="status_pengambilan" class="col-md-4 control-label">Status Pengambilan</label> <div class="col-md-6">
                            <input id="status_pengambilan" type="text" class="form-control" name="status_pengambilan" value="{{ old('status_pengambilan') }}" required autofocus>

                            @if ($errors->has('status_pengambilan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status_pengambilan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>
					
					<div class="form-group">
                    	<div class="col-md-6 col-md-offset-4">
                        	<button type="submit" class="btn btn-primary">
                            	Save
                        	</button>
                    	</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop