@extends('base1')
@section('content')
<div class="container">
    <div class="login-box">
        <h2>Register?</h2>
        <form action="{{'/register'}}" method="POST">
            {{csrf_field()}}
          <div class="user-box">
            <input type="text" name="name"  id="name" class="form-control" placeholder="Name">
            @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
          <div class="user-box">
            <input type="email" name="email"  id="email" class="form-control" placeholder="Email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div>
            <a href="{{'/log'}}">Already have an account?</a>

            <button class="btn btn-primary btn-sm mx-5" type="submit">
            Submit
          </button></div>


        </form>
      </div>
</div>
@endsection
<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background-image:url('{{asset('/images/onic.jpg')}}');
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 500px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgb(58, 2, 2);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 5px 0;
  font-size: 12px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}


</style>
