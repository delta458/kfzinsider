@layout('backend.settings')

@section('output')
<div>
    {{ Form::open('garageUpdateOrDelete', 'POST') }}
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Adresse</th>
            <th>ID</th>
            <th>Bearbeiten</th>
            <th>Löschen</th>
        </tr>
        
        @foreach($this->garages as $garage)
        <tr>
            <td>{{ $garage->name }}</td>
            <td>{{ $garage->address }}</td>
            <td>{{ $garage->id }}</td>
            <td>{{ Form::checkbox('garageUpdate', $garage->id) }}</td>
            <td>{{ Form::checkbox('garageDelete', $garage->id) }}</td>
        </tr>
        @endforeach
    </table>
    {{ Form::submit("Bestätigen") }}
    {{ Form::close() }}
</div>
@endsection