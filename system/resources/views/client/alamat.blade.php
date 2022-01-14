@extends('client.section.base')

@section('content_front')



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
     
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{url('public')}}/assets/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{url('shop')}}">Produk</a>
                              </li>
                              
                             <li class="nav-item">
                             <a class="nav-link" href="{{url('login')}}" >Login</a>
                           </li>
                            <li class="nav-item">
                             <a class="nav-link" href="{{url('checkout')}}" > <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                           </li>

                        </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->

     

      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                                 <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('public')}}/assets/images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                                 <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('public')}}/assets/images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                                 <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('public')}}/assets/images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                                 <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('public')}}/assets/images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                                 <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('public')}}/assets/images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
 <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card" style="margin-bottom: 100px">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="" class="control-label">Provinsi</label>
                            <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
                              <option value="">Pilih Provinsi</option>
                              @foreach ($list_provinsi as $provinsi)
                                  <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten</label>
                            <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
                              <option value="">Pilih Provinsi terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                            <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
                              <option value="">Pilih Kabupaten terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Desa</label>
                            <select name="" id="desa" class="form-control">
                              <option value="">Pilih Kecamatan terlebih dahulu</option>
                            </select>
                          </div>                
                        </div>
                        <button class="btn btn-dark float-right" style="margin-top: 20px"><i class="fa fa-save"></i> Chekout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush