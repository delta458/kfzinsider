@layout('backend.settings')

@section('output')
<h3>Werkstatt bearbeiten</h3>

{{ Form::open('garageUpdateAction','POST') }}
{{ Form::token()}}
<!-- id field -->
<p>{{ Form::label('id', 'Id') }}</p>
<p>{{ Form::text('id',$garage->id) }}</p>
<!-- username field -->
<p>{{ Form::label('name', 'Name') }}</p>
<p>{{ Form::text('name',$garage->name) }}</p>
<!-- password field -->
<p>{{ Form::label('address', 'Addresse') }}</p>
<p>{{ Form::text('address',$garage->address) }}</p>
<!-- submit button -->
<p>{{ Form::submit('Bestätigen') }}</p>

{{ Form::close() }}
@endsection