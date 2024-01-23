@extends('layout.login')

@section('title', 'OLSAM | Protect Our Environtment')

@section('content')
<div class="login-container" style="margin-top: 230px">
    <h1>OLSAM</h1>
    <h2>Protect our Environment</h2>
      @if(session('success'))
      <p class="alert alert-success">{{ session('success') }}</p>
      @endif
      @if($errors->any())
      @foreach($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
      @endforeach
      @endif
      <form action="{{ route('login.action') }}" method="POST">
          @csrf
          <div class="mb-3">
              <label>Username <span class="text-danger">*</span></label>
              <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
          </div>
          <div class="mb-3">
              <label>Password <span class="text-danger">*</span></label>
              <input class="form-control" type="password" name="password" />
          </div>
          <div class="mb-3">
              <button class="btn btn-primary">Login</button>
              <a class="btn btn-danger" href="/">Back</a>
          </div>
      </form>
  </div>
</div>

@endsection