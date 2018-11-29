@extends('layouts.app')

@section('content')
<div >
	<h1>Pilih Kategori</h1>
	<form class="pilihKaregori" method="GET" action="{{ route('post.search')}}" >
		<input type="radio" name="kt1" value="Dongen">Dongeng Indonesia<br>
		<input type="radio" name="kt1" value="Baca">Belajar Membaca<br>
		<input type="radio" name="kt1" value="Angka">Belajar Menghitung<br>
		<input type="submit" name="submit" value="Apply">
	</form>

	<<?php 

	 ?>
	
</div>
<div>
	<h1>Batas Waktu</h1>
	<input type="number" name="waktu">
</div>

<div>
	<br>
	<form method="post" action="home">
		<input type="submit" href="home/1" name="sub1" value="Set Perubahan">
	</form>
</div>

@endsection
