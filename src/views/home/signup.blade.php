@extends('layout.template')
@section('content')
<h2>Sign Up</h2>
@if(count($errors)>0)
  <div class="err-messages">
   @foreach($errors->all() as $e)  
   <p>{{$e}}</p>
   @endforeach
   </div>
@endif
<form action="{{ \URL::route('signup_action') }}" method="post" id="signupFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Name"/>
</div>
<div>
<label>Email</label>
<input type="email" name="email" placeholder="Email"/>
</div>
<div>
<label>Password</label>
<input type="password" name="password" placeholder="Password" />
</div>
<div>
<input type="submit" name="signup" value="Signup" />
</div>
</form>
@endsection