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
    <h2 class="text-center fs-3">Register Page</h2>
    <form action="/register" method="post">
        @csrf
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" class="form-control @error('name')is-invalid @enderror" id="name" value={{ old('name') }}>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
          </div>  
        @enderror
    </div>

      <div class="input-box">
        <input type="text" name="username" placeholder="Enter your username" class="form-control @error('username')is-invalid @enderror" id="username" value={{ old('username') }}>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
          </div>  
        @enderror
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" class="form-control @error('email')is-invalid @enderror" id="email" value={{ old('email') }}>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
          </div>  
        @enderror
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" class="form-control @error('password')is-invalid @enderror" id="password">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
          </div>  
        @enderror
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3 style="margin-top:7px;">I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="/login">Login now</a></h3>
      </div>
    </form>
  </div>
<div>
@endsection