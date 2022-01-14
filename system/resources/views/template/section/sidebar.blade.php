@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp



<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">KomStore</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<li class="{{checkRouteActive('admin/dashboard')}}">
						<a class="sidebar-link" href="{{url('admin/dashboard')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Beranda</span>
            </a>
					</li>

					<li class="{{checkRouteActive('admin/produk')}}">
						<a class="sidebar-link" href="{{url('admin/produk')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Produk</span>
            </a>
					</li>

						<li class="{{checkRouteActive('admin/user')}}">
						<a class="sidebar-link" href="{{url('admin/user')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
            </a>
					</li>
					<li class="{{checkRouteActive('shop')}}">
						<a class="sidebar-link" href="{{url('shop')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Halaman Utama</span>
            </a>
					</li>

					</ul>
			</div>
		</nav>