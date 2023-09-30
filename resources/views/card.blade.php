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
<div id="center" class="flex md:h-screen md:items-center md:justify-center">
    <div id="card" class="bg-white bg-[80rem_] md:bg-contain rounded-xl pt-12 px-4 md:px-8 pb-8 w-full md:w-[50rem] lg:w-[75rem] xl:w-[80rem]">
        <div id="content" class="font-inter flex flex-col md:flex-row justify-between">
            <div id="left-side" class="flex flex-col md:flex-[0_0_20%] lg:flex-[0_0_25%] xl:flex-[0_0_20%] mb-6 md:mb-0">
                <div id="profile" style="background-image: url('{{$data->profile}}')" class="w-48 h-48 lg:w-52 lg:h-52 xl:w-56 xl:h-56 rounded-[5rem] border-4 self-center md:self-start"></div>
                <h3 class="block md:hidden text-[#111111] text-[3rem] mt-6 mb-4 font-bold tracking-tighter self-center text-center leading-none">{{$data->fullname}}</h3>
                <div class="flex self-center md:self-start items-center box mt-2 md:mt-6">
                    <div>
                        <img src="{{ asset('icons/scarlet-team-logo.png') }}" alt="{{$data->team}} Team Logo">
                    </div>
                    <div class="ml-1">
                        <p class="subtitle common">Team</p>
                        <p class="text-[2rem] xl:text-[2.5rem] text-[#111] capitalize  leading-none">{{$data->team}}</p>
                    </div>
                </div>
                <div class="flex flex-row md:flex-col justify-between">
                    <div class="box text-center md:text-start flex-[0_0_45%] md:flex-none">
                        <p class="subtitle common">Role in the team</p>
                        <p class="text-[1.5rem] md:text-[2rem] xl:text-[2.5rem] text-[#111] capitalize leading-none">{{$data->role}}</p>
                    </div>
                    <div class="text-center md:text-start flex-[0_0_45%] md:flex-none">
                        <p class="subtitle common">Department or company</p>
                        <p class="text-[1.5rem] text-[#111] capitalize">{{$data->department}}</p>
                    </div>
                </div>
            </div>
            <div id="right-side" class="w-full mt-0 md:mt-[9%] lg:mt-[10%] flex-none md:flex-[0_0_70%] lg:flex-[0_0_75%] ">
                <h3 class="hidden md:block text-[#111111] text-[3rem] lg:text-[3.5rem] font-bold tracking-tighter mb-4">{{$data->fullname}}</h3>
                <div class="flex-none lg:flex">
                    <div class="flex-none md:flex flex-wrap flex-col md:flex-row md:flex-[0_0_50%] lg:flex-[0_0_66.6%] pl-[0.4rem]">
                        <div class="box box-content">
                            <p class="subtitle common">{{$data->team}} member since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">My superpower</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">Working in {{$data->department}} since</p>
                            <p class="information common">{{$date}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">I want to be good at</p>
                            <p class="information common">{{$data->good_at}}</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">Favority [thing]</p>
                            <p class="information common">[Something]</p>
                        </div>
                        <div class="box box-content">
                            <p class="subtitle common">Favority thing to do at work</p>
                            <p class="information common">Making nice prototype</p>
                        </div>
                    </div>
                    <div class="h-full flex-grow flex-none md:flex-[0_0_33.3%] max-lg:pl-[0.4rem]">
                        <p class="subtitle common">Background / Experience</p>
                        @foreach ($backgroundArr as $index => $country)
                            <p class="information common">{{$country}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="social" class="flex flex-col md:flex-row md:float-right mt-12 md:mt-20 font-roboto">
            <div class="flex items-center mb-4 md:mb-0 md:mr-8 text-sm">
                <img src="{{ asset('icons/LinkLogo.png') }}" alt="Website Icon">
                <a href="" class="text-[#CECECE] underline-offset-0 ml-1"></a>
            </div>
            <div class="flex items-center mb-4 md:mb-0 md:mr-8 text-sm">
                <img src="{{ asset('icons/linkdinLogo.png') }}" alt="LinkedIn Icon">
                <a href="" class="text-[#CECECE] underline-offset-0 ml-1">linkedin.com/in/</a>
            </div>
            <div class="flex items-center md:mr-8 text-sm">
                <img src="{{ asset('icons/InstLogo.png') }}" alt="Instagram Icon">
                <a href="" class="text-[#CECECE] underline-offset-0 ml-1">instagram.com/</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>
