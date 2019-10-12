@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data</div>

                <div class="card-body">
                	<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                     <table class="table table-dark">
                    	<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Path</th>
							<th scope="col">Users Id</th>
							<th scope="col">Kategori Galeri Id</th>
							<th scope="col">Created</th>
							<th scope="col">Updated</th>
						</tr>
						</thead>
					@foreach($Galeri as $item)
						<tbody>
						<tr>
							<td>{!! $item->nama !!}</td>
							<td>{!! $item->keterangan !!}</td>
							<td>{!! $item->path !!}</td>
							<td>{!! $item->users_id !!}</td>
							<td>{!! $item->kategori_artikel_id !!}</td>
							<td>{!! $item->created_at !!}</td>
							<td>{!! $item->updated_at !!}</td>
							<td><a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a></td>
							<td><a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-primary">Edit</a></td>
							<td>
								{!! Form::open(['route' => ['galeri.destroy',$item->id], 'method' => 'delete']); !!}
					            {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
					            {!! Form::close() !!}
							</td>
						</tr>

					@endforeach

				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection