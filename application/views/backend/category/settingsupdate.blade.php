@layout('backend.settings')

@section('output')
<h3>Dienstleistung bearbeiten</h3>

{{ Form::open('categoryUpdateAction','POST') }}
{{ Form::token()}}
<!-- id field -->
<p>{{ Form::label('id', 'Id') }}</p>
<p>{{ Form::text('id',$category->id) }}</p>
<!-- name field -->
<p>{{ Form::label('category_name', 'Name') }}</p>
<p>{{ Form::text('category_name',$category->category_name) }}</p>
<!-- submit button -->
<p>{{ Form::submit('Bestätigen') }}</p>

{{ Form::close() }}
@endsection