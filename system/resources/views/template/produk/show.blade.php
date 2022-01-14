@extends("template.base")
@section('content')
<!-- start coding -->

   
  <div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
         </div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <h3> Detail Data Produk</h3>
                </div>

    <div class="container">
      <div class="card-body">
        <h3>{{$produk->nama}}</h3>
            <hr>
            <p>{{$produk->harga}} |
   Stok : {{$produk->stok}} |
   Tanggal Produk : {{$produk->created_at->format("d M Y")}}
</p>
             <p>
                {!! nl2br ($produk->Deskripsi) !!}
             </p>
            <p>
               <img src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" width="50%">
            </p>
        </div>  
      </div>
      
    </div>

    </div>
   </div>

<!-- end coding -->
@endsection

