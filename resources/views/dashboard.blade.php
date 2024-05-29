<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css', 'resources/js/app.js')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NoGooC</title>
</head>

<body>
    @include('sweetalert::alert')
    <div class="bg-[#F8FCFF] w-screen">
        <div class="h-nav p-5 flex gap-x-5">
            <div
                class="hidden md:flex md:flex-col md:justify-between border h-full w-[25%] rounded-lg p-5 bg-white drop-shadow-sm">

                @if (auth()->check() && auth()->user()->is_admin)
                    <div class="fRow justify-between">
                        <h2 class="textBlack font-medium">Keterangan Kategori</h2>
                        <button data-modal-target="iconUpdate-modal" data-modal-toggle="iconUpdate-modal" class=""
                            type="button">
                            <img src="/Edit.svg" alt="">
                        </button>
                    </div>
                @else
                    <h2 class="textBlack font-medium">Keterangan Kategori</h2>
                @endif



                <div class="h-full w-full md:w-[75%] flex flex-col gap-y-2">
                    <h2 class="text-xs text-graySecondary">Filter dan Lokasi</h2>
                    <div class="flex flex-col md:flex-row text-grayPrimary items-center">
                        <h3 class="text-xs sm:textFilter font-medium">TANGGAL</h3>

                        <div class="flex justify-center items-center mr-5">
                            <input datepicker datepicker-format="yyyy-mm-dd" type="date" name="start"
                                id="startDateInput"
                                class="border-none text-center focus:ring-0 focus: pFormActive font-light"
                                placeholder="Select date" value="{{ $filter['start_date'] ?? '' }}">

                            <p>-</p>

                            <input datepicker datepicker-format="yyyy-mm-dd" type="date" name="end"
                                id="endDateInput"
                                class="border-none text-center focus:ring-0 focus: pFormActive font-light"
                                placeholder="Select date end" value="{{ $filter['end_date'] ?? '' }}">
                        </div>

                        <h3 class="textFilter font-medium">TINGGI</h3>

                        <div class="flex justify-center items-center mr-5">
                            <input name="min" type="number" id="heightInput"
                                class="border-none ml-2 w-[3vw] p-0 text-center focus:ring-0 focus:border-none pFormActive font-light"
                                placeholder="0" min="0" max="1000" value="{{ $filter['min_height'] ?? '' }}">

                            <p>-</p>

                            <input name="max" type="number" id="heightInput"
                                class="border-none ml-2 w-[3vw] p-0 text-center focus:ring-0 focus:border-none pFormActive font-light"
                                placeholder="0" min="0" value="{{ $filter['max_height'] ?? '' }}">
                            <p class="text-gray-500 font-light">Centimeter</p>
                        </div>

                        <x-button message="Filter" type="submit" color="Primary" link=""
                            classname="px-5 py-[0.4rem] rounded-lg text-base" icons="" />
                    </div>


                    <div id="map" class="border h-full rounded-lg bg-white drop-shadow-sm"></div>
                </div>

            </div>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
