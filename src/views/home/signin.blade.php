@extends('layout.template')
@section('content')
<h2>Sign In</h2>
@if(\Session::has('error_msg'))
	<div class="err-messages">{{ \Session::get('error_msg') }}</div>
@endif
<form action="{{ \URL::route('signin_action') }}" method="post" id="signinFrm">
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