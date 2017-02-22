@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-20">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tunjangan</b></h2></center></div>

                <div class="panel-body">
                <a class="btn btn-primary" href="{{ url('/penggajian/create') }}">Proses</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th><center>No</center></th>
								<th><center>Kode Tunjangan Pegawai</center></th>
								<th><center>Jumlah Jam Lembur</center></th>
								<th><center>Jumlah Uang Lembur</center></th>
								<th><center>Gaji Pokok</center></th>
								<th><center>Total Gaji</center></th>
								<th><center>Tanggal Pengambilan</center></th>
								<th><center>Status Pengambilan</center></th>
								<th colspan="3">Actions</th>
							</tr>
						</thead>
						<tbody>
						@php
						$n=1;
						@endphp
						@foreach($penggajian as $pengg)
						<tr>
							<td><center>{{ $n++ }}</center></td>
							<td><center>{{ $gur->Tunjangan_pegawai->kode_tunjangan_pegawai}}</center></td>
							<td><center>{{ $gur->Penggajian->jumlah_jam_lembur }}</center></td>
							<td><center>{{ $gur->Penggajian->jumlah_uang_lembur }}</center></td>
							<td><center>{{ $gur->Penggajian->gaji_pokok }}</center></td>
							<td><center>{{ $gur->Penggajian->total_gaji }}</center></td>
							<td><center>{{ $gur->Penggajian->tanggal_pengambilan }}</center></td>
							<td><center>{{ $gur->Penggajian->status_pengambilan }}</center></td>
							<td><center><a href="{{route('penggajian.edit', $pengg->id)}}" class="btn btn-warning">Edit</a></center></td>
							<td><center>
								{!! Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$pengg->id]]) !!}
								{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
								{!! Form::close() !!}
							</center></td>
						</tr>
						@endforeach
					</tbody>
				</table>
            </div>
        </div>
    </div>
</div>
@endsection