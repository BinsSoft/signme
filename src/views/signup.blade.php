<h2>Sign Up</h2>
<form action="{{ \URL::route('signup_post') }}" method="post" id="signupFrm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Name"/>
</div>
<div>
<label>Email</label>
<input type="email" name="email" placeholder="Email"/>
</div>
<label>Password</label>
<input type="password" name="password" placeholder="Password" />
</div>
<input type="submit" name="signup" value="Signup" />
</div>
</form>