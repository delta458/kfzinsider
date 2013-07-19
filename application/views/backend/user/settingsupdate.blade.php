@layout('backend.settings')

@section('output')
<h3>User bearbeiten</h3>

{{ Form::open('userUpdateAction','POST') }}
{{ Form::token()}}
<!-- id field -->
<p>{{ Form::label('id', 'Id') }}</p>
<p>{{ Form::text('id',$user->id, array('readonly' => 'readonly')) }}</p>

{{ Form::label('name', 'Name') }} {{ Form::text('name',$user->name) }}
{{ Form::label('email', 'Email') }} {{ Form::text('email',$user->email) }}
{{ Form::label('password', 'Password') }} {{ Form::text('password') }}

{{ Form::label('admin', 'Adminisratorrechte') }} 
<p></p>

@if ($user->isadmin === 1)
   {{ Form::checkbox('admin', '',true)}}
@else
    {{ Form::checkbox('admin', '',false) }}
@endif





<!-- submit button -->
<p>{{ Form::submit('Bestätigen') }}</p>

{{ Form::close() }}
@endsection