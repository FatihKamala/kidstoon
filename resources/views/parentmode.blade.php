@extends('layouts.app')

@section('content')
<div >
	<h1>Pilih Kategori</h1>
	<form class="pilihKaregori" method="GET" action="ParentModeController" >
		<input type="checkbox" name="kt" value="dongen">Dongeng Indonesia<br>
		<input type="checkbox" name="kt" value="baca">Belajar Membaca<br>
		<input type="checkbox" name="kt" value="angka">Belajar Menghitung<br>
		<input type="submit" name="submit" value="Apply">
	</form>

	<<?php 

	 ?>
	
</div>
<div>
	<h1>Batas Waktu</h1>
	<input type="number" name="waktu">
</div>

@endsection
