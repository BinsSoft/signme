@extends('layout.template')
@section('content')
<h2>Sign In</h2>
<form action="{{ \URL::route('signin_post') }}" method="post" id="signinFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div>
<label>Email</label>
<input type="email" name="email" placeholder="Email"/>
</div>
<div>
<label>Password</label>
<input type="password" name="password" placeholder="Password" />
</div>
<div>
<input type="submit" name="login" value="Login" />
</div>
</form>
@endsection