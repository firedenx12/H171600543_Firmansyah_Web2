@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Galeri </div>

                <div class="card-body">
                  <div class="form-group row">
              	 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$kategoriGaleri->nama!!}</label>
                 </div>   
                 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Users Id') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$kategoriGaleri->users_id!!}</label>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Create') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$kategoriGaleri->created_at!!}</label>
                 </div>
                 <div class="form-group row"> 
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Update') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$kategoriGaleri->updated_at!!}</label>
                </div>
                <div class="form-group row mb-0">
                           <div class="col-md-8 offset-md-4">
                               <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">Kembali</a>
                           </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection