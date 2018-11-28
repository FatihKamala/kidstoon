@extends('layouts.app')

@section('content')
<h1>Masukkan Password</h1>
<div class="col-xs-6 col-md-4">
        <section class="form" id="form">
          <form class="form-signin" action="/parentmode" method="post">
            @csrf
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

@endsection