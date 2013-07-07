@layout('backend.settings')

@section('output')
<h3>Kategorie hinzufügen</h3>

@if($errors->has())
<p>The following erros have occurred:</p>
<ul>
    Not implemented at the moment.
</ul>
@endif
{{ Form::open('categoryCreate','POST') }}
{{ Form::token()}}
<!-- username field -->
<p>{{ Form::label('name', 'Name') }}</p>
<p>{{ Form::text('name',Input::old('name')) }}</p>
<!-- submit button -->
<p>{{ Form::submit('Hinzufügen') }}</p>
{{ Form::close() }}
@endsection