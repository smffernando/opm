<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPM</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-10">
                <!-- @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @endif -->
                @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
            <br>
            @endif
                <form class="form-horizontal" action="/login" method="POST">
                    @csrf
                    <fieldset>
                        <legend>Login</legend>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="fname" name="fname" value="{{ old('fname') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="lname" name="lname" value="{{ old('lname') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uname" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="uname" name="uname" value="{{ old('uname') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" value="{{ old('address') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" id="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="psw-rt" class="col-sm-2 col-form-label">Retype Password</label>
                            <div class="col-sm-10">
                                <input type="password" id="psw-rt" name="password_confirmation" value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nic" class="col-sm-2 col-form-label">NIC No.</label>
                            <div class="col-sm-10">
                                <input type="text" id="nic" name="nic" value="{{ old('nic') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-sm-2 col-form-label">Telephone / mobile</label>
                            <div class="col-sm-10">
                                <input type="tel" id="tel" name="tel" value="{{ old('tel') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <input type="checkbox" checked="checked" name="remember">
                            <a href="#" style="color:dodgerblue">Terms & Conditions</a>.
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    {{View::make('footer')}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>