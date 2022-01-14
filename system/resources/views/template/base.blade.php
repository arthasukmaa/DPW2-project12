<!DOCTYPE html>
<html lang="en">

<head>
	
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin</title>

	@include("template.section.assets")
</head>

<body>
	<div class="wrapper">
		@include("template.section.sidebar")

		<div class="main">
			@include("template.section.header")

			<main class="content">
				<div class="container-fluid p-0">
					@include('template.utils.notif')
					@yield('content')
					
				</div>
			</main>

			@include("template.section.footer")
		</div>
	</div>

	@include("template.section.js")

</body>

</html>