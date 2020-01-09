<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Admin Form</h1>
    <form action="" method="post" action="{{route('contact.message')}}">
            {{ csrf_field() }}
            <div>
                <input type="text" placeholder="Company name" name="company">
            </div>
            @if($errors->has('company'))
                <small>{{$errors->first('company')}}</small>
            @endif
            <div>
                <input type="text" placeholder="Emplyee name" name="employee">
            </div>
            @if($errors->has('employee'))
                <small>{{$errors->first('employee')}}</small>
            @endif
            <div>
                <input type="text" placeholder="Work field" name="workfield">
            </div>
            @if($errors->has('workfield'))
                <small>{{$errors->first('workfield')}}</small>
            @endif
            <div>
                <button type="submit">Send</button>
            </div>
        </form>
    </body>
</html>
