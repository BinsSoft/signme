@extends('layout.after-login-template')
@section('content')
<h2>Change Password</h2>
@if(\Session::has('success_msg'))
	<div class="success-messages">{{ \Session::get('success_msg') }}</div>
@endif
<form action="{{ \URL::route('change_password_action') }}" method="post" id="changePasswordFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div>
<label>New Password</label>
<input type="password" name="new_password" placeholder="New Password"/>
</div>

<div>
<label>New Confirm Password</label>
<input type="password" name="confirm_password" placeholder="Confirm Password"/>
</div>
<div>
<input type="submit" name="send" value="Send" />
</div>
</form>
@endsection