<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>

  .form-group {
  margin-left: 101px;
  width: 500px;
  margin-bottom: 4rem;
}

.right{
  color: #00d5ee;
  margin-top: 24%;

}
.btn {
  margin-left: 100px;
}
h3{
  color:#00d5ee;
  margin-bottom: 31px;
  font-family: Monospace;
}
.btn{
  background-color:#00d5ee;
  border-color:#00d5ee
}
.forget{
  margin-left: 200px;
}
.form-control{
  opacity: 0.7;
  filter: alpha(opacity=70);
  border-radius: 25px;
}
.reg{
  display: block;
  margin-top: 10px;
  margin-left: 366px;
}
.forget{


}
img{
    width: 700px;
    height: 800px;
}
</style>
</head>
<body>


  <div class="row">
      <div class="col-lg-6">
         <img src="assets/car1.jpg" >

      </div>
      <div class="col-lg-6 ">

          <form  class="right" method="POST" action="{{ route('login') }}">
              @csrf

                <div class="form-group">
                  <h3> LOGIN </h3>
                                              <label for="email" class= "text-md-right">{{ __('E-Mail Address') }}</label>


                                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                </div>

                <div class="form-group">
                  <label for="password" class=" text-md-right">{{ __('Password') }}</label>


                                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                              @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                </div>

                <div class="form-group form-check">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label> Remember me </label>
                </div>
                <button type="submit" class="btn btn-primary">
                                                  {{ __('Login') }}
                                              </button>

                                              @if (Route::has('password.request'))
                                                  <a class="forget" href="{{ route('password.request') }}">

                                                  </a>
                                              @endif
                <a class="reg" href="{{ route('register') }}"> Don't Have An Account ? Register</a>
              </form>

      </div>
   </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
