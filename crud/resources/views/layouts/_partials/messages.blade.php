@if ($message = Session::get('success'))
    <p style="background-color: green; color: white; padding: 15px">
        {{ $message }}
    </p>
@endif

@if ($message = Session::get('danger'))
    <p style="background-color: red; color: white; padding: 15px">
        {{ $message }}
    </p>
@endif
