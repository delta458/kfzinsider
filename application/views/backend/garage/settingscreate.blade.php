@layout('backend.settings')

@section('output')
<h3>Werkstatt hinzufügen</h3>

@if($errors->has())
<p>The following erros have occurred:</p>
<ul>
    Not implemented at the moment.
</ul>
@endif
<div class="formLayout">
    {{ Form::open('garageCreate','POST') }}
    {{ Form::token()}}
    <!-- username field -->
    <p>{{ Form::label('name', 'Name') }}</p>
    <p>{{ Form::text('name',Input::old('name')) }}</p>
    <!-- password field -->
    <p>{{ Form::label('address', 'Addresse') }}</p>
    <p>{{ Form::text('address') }}</p>
    <!-- submit button -->
    <p>{{ Form::submit('Hinzufügen') }}</p>
    {{ Form::close() }}
</div>
@endsection