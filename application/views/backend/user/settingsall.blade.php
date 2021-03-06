@layout('backend.settings')

@section('output')
<div>
    {{ Form::open('userUpdateOrDelete', 'POST') }}
    <table class="table table-striped">
        <tr>
            <th>Email</th>
            <th>Bearbeiten</th>
            <th>Löschen</th>
        </tr>

        @foreach($this->users as $user)
        <tr>
            <td>
                @if($user->isadmin)
                    <b> {{ $user->email }} (Admin) </b>
                @else 
                    {{ $user->email }} 
                @endif
        </td>
        <td>{{ Form::checkbox('userUpdate', $user->id) }}</td>
        <td>{{ Form::checkbox('userDelete[]', $user->id) }}</td>
        </tr>
        @endforeach
    </table>
    {{ Form::submit("Bestätigen") }}
    {{ Form::close() }}
</div>
@endsection