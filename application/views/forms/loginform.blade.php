@layout('master.index')

@section('content')

    {{ Form::open('login','POST') }}
   
    {{ Form::token() }}
    
    <!-- username field -->
    <p>{{ Form::label('email', 'Email') }}</p>
    <p>{{ Form::text('email') }}</p>
    <!-- password field -->
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password') }}</p>
    <!-- submit button -->
    <p>{{ Form::submit('Login') }}</p>
    {{ Form::close() }}
@endsection