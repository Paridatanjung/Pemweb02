<!-- TUGAS PRAKTIKUM 10 (Membuat tampilan about) -->

@extends('template/main')

@section('content3')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Nunito', Arial;
    }

	h1{
		text-align: center;
		padding: 50px;
        margin: 3%;
	}

	p{
		text-align: justify;
		font-size: 26px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Welcome To Beauty Zone!
				</h1>
				<p>
				Selamat datang di toko Beauty Zone yang membawa Anda ke dunia baru kecantikan. Temukan produk terbaik dan terbaru yang dirancang khusus untuk merawat dan menyempurnakan kulit Anda.
				<br>
				kami menyediakan pilihan lengkap untuk setiap kebutuhan kulit. Dengan konsultasi ahli dan saran yang terpercaya, kami akan membantu Anda menemukan rekomendasi produk yang cocok secara pribadi.
				<br>
				Yuk check out sekarang!
				<br>
				<br>
				Jam operasional
				Setiap hari: 09.00 – 18.00
				</p>
				<br>
		</div>
	</div>
</div>
@endsection