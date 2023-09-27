<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <title>{{$data->fullname}} Profile</title>
</head>
<body>
<div id="center" class="flex h-screen items-center justify-center">
    <div id="card">
        {{-- <div id="background-image" style="background-image: url('images/Background-Image.png')"> --}}
        <div id="background-image">
            <img src="{{ asset('images/Background-Image.png') }}" alt="City Buildings">
        </div>
        <div id="content">
            <div id="left-side">
                <img src="{{$data->profile}}" alt="{{$data->fullname}} profile picture">
            </div>
            <div id="right-side">

            </div>
        </div>
    </div>


</div>

    {{-- {{$data->fullname}} --}}
</body>
</html>
