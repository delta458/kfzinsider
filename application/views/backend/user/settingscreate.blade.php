@layout('backend.settings')

@section('output')
<h3>User hinzufügen</h3>

@if($errors->has())
<div>The following erros have occurred:</div>
<ul>
    Not implemented at the moment.
</ul>
@endif
{{ Form::open('userCreate','POST') }}
{{ Form::token()}}

{{ Form::label('name', 'Name') }} {{ Form::text('name',Input::old('name')) }}
{{ Form::label('email', 'Email') }} {{ Form::text('email',Input::old('email')) }}
{{ Form::label('password', 'Password') }} {{ Form::text('password') }}
{{ Form::label('admin', 'Adminisratorrechte') }} {{ Form::checkbox('admin') }}
<p></p>
<p> {{ Form::submit('Hinzufügen') }} </p>    
{{ Form::close() }}
@endsection