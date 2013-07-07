@layout('backend.settings')

@section('output')
<h3>Dienstleistung bearbeiten</h3>

{{ Form::open('serviceUpdateAction','POST') }}
{{ Form::token()}}
<!-- id field -->
<p>{{ Form::label('id', 'Id') }}</p>
<p>{{ Form::text('id',$service->id) }}</p>
<!-- name field -->
<p>{{ Form::label('service_name', 'Name') }}</p>
<p>{{ Form::text('service_name',$service->name) }}</p>
<!-- submit button -->
<p>{{ Form::submit('Bestätigen') }}</p>

{{ Form::close() }}
@endsection