@extends('layouts.main')
<style>
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  text-align: center;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
  margin-bottom:25;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

</style>
@section('container')

<div class="d-flex justify-content-center py-5">
<div class="wrapper">
    {{-- Alert --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <h2 class="text-center fs-3">Login Page</h2>
    <br>
    <form action="/login" method="post">
        @csrf
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
              </div>  
            @enderror
          </div>

          <div class="input-box">
            <input type="password" name="password" placeholder="Create password" class="form-control @error('password')is-invalid @enderror" id="password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
              </div>  
            @enderror
            
          </div>
      <div class="policy">
        <input type="checkbox">
        <h3 class="fw-bold" style="margin-top:7px;">Remember Me</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login Now">
      </div>
      <div class="text">
        <h3>Don't Have an Account? <a href="/register">Register Here</a></h3>
      </div>
    </form>
  </div>
<div>
@endsection