@extends('template.base')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                       <img src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Data Produk</h3>
                    </div>
                    <div class="card-body">
                       <div class="card-body">
                            <form action="{{url('admin/produk', $produk->id)}}" method= "post">
                                @csrf
                                @method("PUT")
                               <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="Nama" value="{{$produk->nama}}">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".png">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">stok</label>
                                    <input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Harga</label>
                                <input type="text" class="form-control" name="Harga" value="{{$produk->harga}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="Deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save" data-feather="save"></i> Simpan</button>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
@endpush