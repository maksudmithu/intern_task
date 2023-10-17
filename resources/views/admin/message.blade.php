@if (Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
@if (Session::has('delete-msg'))
    <p class="alert alert-danger">{{ Session::get('delete-msg') }}</p>
@endif
