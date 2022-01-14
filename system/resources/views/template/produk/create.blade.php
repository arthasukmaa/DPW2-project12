@extends('template.base')
@section('content')

<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
         </div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <h3> Tambah Data Produk</h3>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/produk')}}" method= "post" enctype="multipart/form-data">
                    @csrf
                    
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept=".png">
                  </div>
                  <div class="form-group">
                        <label for="" class="control-label">Stok</label>
                        <input type="text" class="form-control" name="stok">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga</label>
                    <input type="text" class="form-control" name="harga">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" style="height: 100px"></textarea>
                  </div>
                  <button class="btn btn-dark float-right mb-3"><i class="fa fa-save" data-feather="save"></i>Simpan</button>

                </form>
                </div>
              </div>
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