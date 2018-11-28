@extends('layouts.app')
<style type="text/css">
    <style>
  body{
  background-color: #FFFCDB;
  padding-right: 10%;
  padding-left: 10%;
  padding-top: 5%;
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
.button{
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
</style>

@section('content')

<body class="text-center">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div class="col-sm-12">
        <section class ="header" id="header">
          <h1>KIDSTOON</h1>
          <h5>Sistem hiburan berbasis edukasi</h5>
        </section>
    </div>


    <div class="row">
      <div class="col-xs-6 col-md-4">
        <section class="form" id="form">
        </section>
      </div>

      <div class="col-xs-6 col-md-4">
        <section class="form" id="form">
          <form class="form-signin" action="/login" method="post">
            @csrf
                  <p>E-mail</p>
                  <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                  <p>Password</p>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                <button type="submit" class="button">
                                    {{ __('Login') }}
                                </button>
          </form>
        </section>
      </div>

      <div class="col-xs-6 col-md-4"><section class="form" id="form">
          <p>Tidak Punya Akun?</p>
          <div class="button">
              <a href="/register">REGISTER</a>
          </div>
        </section>
      </div>
    </div>
</body>
@endsection
