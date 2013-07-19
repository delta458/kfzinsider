@layout('backend.settings')

@section('output')
<div>
    {{ Form::open('serviceUpdateOrDelete', 'POST') }}
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Kategorie</th>
            <th>Bearbeiten</th>
            <th>Löschen</th>
        </tr>
        
        @foreach($this->services as $service)
        <tr>
            <td>{{ $service->service_name }}</td>
            <td>{{ $service->category->category_name }}</td>
            <td>{{ Form::checkbox('serviceUpdate', $service->id) }}</td>
            <td>{{ Form::checkbox('serviceDelete[]', $service->id) }}</td>
        </tr>
        @endforeach
    </table>
    {{ Form::submit("Bestätigen") }}
    {{ Form::close() }}
</div>
@endsection