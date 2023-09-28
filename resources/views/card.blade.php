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
<style>
    #card {
        background-image: url('images/Background-Image-x2.png');
        background-repeat: no-repeat;
        background-size: contain;
    }

    .subtitle {
        color: #13AAFF;
        font-weight: 700;
    }

    .common {
        font-size: 1rem;
    }

    .information {
        color: #111;
        font-weight: 400;
    }

    .box {
        margin-bottom: 1.5rem;
    }

    .box-content {
        flex: 0 0 50%;
    }

    #profile{
        background-size: cover;
        background-repeat: no-repeat;
        box-shadow: 0 3px 4px 0 rgba(0,0,0,0.2), 0 4px 2px 0 rgba(0,0,0,0.19);
    }
</style>
<body>
<div id="center" class="flex h-screen items-center justify-center">
    <div id="card" class="rounded-xl pt-12 px-8 w-[30rem] sm:w-[40rem] md:w-[50rem] lg:w-[75rem] xl:w-[80rem]">
        <div id="content" class="flex">
            <div id="left-side">
                <div id="profile" style="background-image: url('{{$data->profile}}')" class="w-56 h-56 lg:w-60 lg:h-60 rounded-[5rem] border-4"></div>
                <div class="flex items-center box mt-6">
                    <div>
                        <img src="{{ asset('icons/scarlet-team-logo.png') }}" alt="">
                    </div>
                    <div class="ml-1">
                        <p class="subtitle common">Team</p>
                        <p class="text-[2.5rem] text-[#111] capitalize  leading-none">{{$data->team}}</p>
                    </div>
                </div>
                <div class="box">
                    <p class="subtitle common">Role in the team</p>
                    <p class="text-[2.5rem] text-[#111] capitalize leading-none">{{$data->role}}</p>
                </div>
                <div>
                    <p class="subtitle common">Department or company</p>
                    <p class="text-[1.5rem] text-[#111] capitalize">{{$data->department}}</p>
                </div>
            </div>
            <div id="right-side" class="w-full ml-16 mt-24 xl:mt-[7.5rem]">
                <h3 class="text-[#111111] text-[5rem] font-medium tracking-tighter mb-4">{{$data->fullname}}</h3>
                <div class="flex">
                    <div class="flex flex-wrap flex-[0_0_66.6%] pl-[0.4rem]">
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->department}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                    </div>
                    <div class="h-full flex-grow flex-[0_0_33.3%]">
                        <p class="subtitle common">Background / Experience</p>
                        @foreach ($backgroundArr as $index => $country)
                            <p class="information common">{{$country}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


</body>
</html>
