@extends('layout.after-login-template')
@section('content')
<h2>Change Password</h2>
<form action="{{ \URL::route('changepassword_post') }}" method="post" id="changePasswordFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

<div>
<label>Old Password</label>
<input type="password" name="old_password" placeholder="Old Password"/>
</div>

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