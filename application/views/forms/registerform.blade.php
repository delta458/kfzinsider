@layout('master.index')

@section('content')

<h1>Register</h1>

@if($errors->has())
<p>The following erros have occurred:</p>
<ul>
    {{$errors->first('email','<li>:message</li>')}}
    {{$errors->first('password','<li>:message</li>')}}
    {{$errors->first('password_confirmation','<li>:message</li>')}}
</ul>
@endif
{{ Form::open('register','POST') }}
{{ Form::token()}}
<!-- username field -->
<p>{{ Form::label('email', 'Email') }}</p>
<p>{{ Form::text('email',Input::old('email')) }}</p>
<!-- password field -->
<p>{{ Form::label('password', 'Password') }}</p>
<p>{{ Form::password('password') }}</p>
<!-- password confirmation field -->
<p>{{ Form::label('password_confirmation', 'Confirm Password') }}</p>
<p>{{ Form::password('password_confirmation') }}</p>
<!-- submit button -->
<p>{{ Form::submit('Register') }}</p>
{{ Form::close() }}
@endsection