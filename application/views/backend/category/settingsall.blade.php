@layout('backend.settings')

@section('output')
<div>
    {{ Form::open('categoryUpdateOrDelete', 'POST') }}
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Bearbeiten</th>
            <th>Löschen</th>
        </tr>
        
        @foreach($this->categories as $category)
        <tr>
            <td>{{ $category->category_name }}</td>
            <td>{{ Form::checkbox('categoryUpdate', $category->id) }}</td>
            <td>{{ Form::checkbox('categoryDelete[]', $category->id) }}</td>
        </tr>
        @endforeach
    </table>
    {{ Form::submit("Bestätigen") }}
    {{ Form::close() }}
</div>
@endsection