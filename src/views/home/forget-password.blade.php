@extends('layout.template')
@section('content')
<h2>Forgot Password</h2>
@if(\Session::has('error_msg'))
	<div class="err-messages">{{ \Session::get('error_msg') }}</div>
@endif
<form action="{{ \URL::route('forgot_password_action') }}" method="post" id="forgetPasswordFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

<div>
<label>Email</label>
<input type="email" name="email" placeholder="Email"/>
</div>
<div>
<input type="submit" name="send" value="Send" />
</div>
</form>
@endsection