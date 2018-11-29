@extends('layouts.app')

<style>
  body{
    height: 100%;
    width: 100%;
  background-color: #FFFCDB;
  padding-top: 1%;  padding-right: 0,5%;
  padding-left: 0,5%;
}
.header{
font-size: 60px;
font-family: gamelan;
}
.form{
  margin: 10px;
  padding: 5%;
  margin-left:2%; 
  position: center;
  border-radius: 40px;
  background: #FFF9B1;
}

.row{
  padding: 1%;
  width: 100%;
}
.sidebar{
    background-color: #F8BD60;
}
.main{
  width: 100%;
  height: 100%;
}
input, select {
      width: 80%;

  text-align: center ;
  font-family: coves ;
  color : white;
  font-size: 16px ;
  outline: none;
  border: none ;
  padding: 10px 10px;
  display: inline-block;
  border-radius: 50px;
  background-color: #F6AE45 ;
}
input[type=submit] {
    width: 80%;
      font-size: 16px ;

    background-color: #ACCE22;
    color: black;
    padding: 14px 20px;
    margin-top: 20px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

p {
  font-family: gamelan ;
  color : black;
  font-size: 16px ;
  text-align: center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 2%;
}
ul li{
  margin: 5px;
}
.btn {
  color: #fff;
  background-color: #D9E483;
  font-style: bold ;
}

.btn:hover {
  color: #fff;
  background-color: #89765B;
}

</style>

@section('content')





<div class="row">
	<div class="col-xs-14 col-md-10">
		<div class="main">
			<div class="container">
				@foreach ($link as $linkvideo) 
    			<iframe width="540" height="320" src="{{$linkvideo->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    	  @endforeach

			</div>
      <div>
        
      </div>
		</div>
	</div>
	<div class="col-md-2 d-none d-sm-block">
	    <div class="sidebar">
	      <ul>
	        <li>
	            <a href="favorite.php"><button type="button" class="btn btn-block">FAVORITE</button></a>

	        </li>
	        <li>
	            <a href="/verifikasi"><button type="button" class="btn btn-block">PARENT MODE</button></a>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	        </li>
	      </ul>
	    </div>
  	</div>
</div>
@endsection

