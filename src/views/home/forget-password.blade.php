@extends('layout.template')
@section('content')
<h2>Forgot Password</h2>
<form action="{{ \URL::route('forgotpassword_post') }}" method="post" id="forgetPasswordFrm">
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