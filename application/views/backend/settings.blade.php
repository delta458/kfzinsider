@layout('master.index')

@section('content')
<style>
    .place {
       
        float:left;
        margin-right: 20px;
    }
    
</style>
<h1>Einstellungen</h1>

<div class="place">
    <h2>Werkstätten</h2>
    <div class="form-actions">
        {{ Form::open('garagesAll','GET') }}
        <button class="btn">Zeige alle Werkstätten</button>
        {{ Form::close() }}
        {{ Form::open('garageCreate','GET') }}
        <button class="btn">Neue Werkstatt einfügen</button>
        {{ Form::close() }}
    </div>
</div>
<div class="place">
    <h2>Kategorien</h2>
    <div class="form-actions">
        {{ Form::open('categoriesAll','GET') }}
        <button class="btn">Zeige alle Kategorien</button>
        {{ Form::close() }}
        {{ Form::open('categoryCreate','GET') }}
        <button class="btn">Neue Kategorie einfügen</button>
        {{ Form::close() }}
    </div>
</div>
<div class="place">
    <h2>Dienstleistungen</h2>
    <div class="form-actions">
        {{ Form::open('servicesAll','GET') }}
        <button class="btn">Zeige alle Dienstleistungen</button>
        {{ Form::close() }}
        {{ Form::open('serviceCreate','GET') }}
        <button class="btn">Neue Dienstleistung einfügen</button>
        {{ Form::close() }}
    </div>
</div>
<div class="place">
    <h2>User</h2>
    <div class="form-actions">
        {{ Form::open('usersAll','GET') }}
        <button class="btn">Zeige alle User</button>
        {{ Form::close() }}
        {{ Form::open('userCreate','GET') }}
        <button class="btn">Neuen User einfügen</button>
        {{ Form::close() }}
    </div>
</div>
<div style="clear: both">
@yield('output')
</div>
@endsection