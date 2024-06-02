@extends('layouts.main')

@section('title', 'Services Page')

@section('container')
    <div class="container mx-auto mt-20 p-4">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Layanan TUPIN</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Pesan tukang terkualifikasi dengan mudah lewat aplikasi Tupin</p>
        </div> 

        <div class="flex flex-wrap -mx-4">

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-cat.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Cat</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bantu membuang cat lama, melakukan cat dasar, finishing dan segala permasalahan cat lainnya.</p>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-listrik.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Listrik</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Siap bantu instalasi listrik, memasang stop kontak, fitting lampu dan permasalahan listrik lainnya.</p>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-keramik.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Keramik</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ahli bongkar pasang keramik dan porselen untuk lantai maupun dinding.</p>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-tembok.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Dinding/Tembok</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tenaga ahli masalah dinding dan tembok.</p>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-pintu.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Pintu/Jendela</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tenaga ahli untuk berbagai pekerjaan seputar pintu dan jendela.</p>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-42 object-cover rounded-t-lg" src="images/tukang-tangki.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tukang Tangki Air</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Andalan pasang tangki air dan permasalahan sanitair lain.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection