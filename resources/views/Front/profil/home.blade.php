@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{__('layouts.nav.profil')}}
        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div style=" background-color:rgb(226 144 60)"class=" justify-between px-6 py-2 mb-8 text-sm font-semibold text-purple-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" style="">
                <div class="flex items-center">
                    @foreach($demandesCountByType as $type => $count)
                    <div class="flex items-center py-2 px-6 mx-4 bg-white rounded-lg ">
                        <div
                            class="p-3 mr-4 text-orange-700 bg-orange-100 rounded-full dark:text-orange-700 dark:bg-orange-100">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </div>

                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                {!! __('profil.home.request_message', ['count' => $count, 'type'=> $type]) !!}
                            </p>

                        </div>

                    </div>
                    @endforeach
                </div>

            </div>

            <div class="py-4">

                <h5>{{__('profil.home.list_request')}}</h5>

                <div class="grid gap-4 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ($typeDemandes as $typeDemande)
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div
                                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    {{ $typeDemande->name }}
                                </p>

                                <a href="{{ route('Front.profil.form', ['typeDeDemande' => $typeDemande->name]) }}">
                                    <button
                                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-100 hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                        {{__('profil.home.start')}} </button>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    {{__('profil.home.new_available')}}
                </h4>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">{{__('profil.home.categories')}}</th>
                                    <th class="px-4 py-3">{{__('profil.home.title')}}</th>
                                    <th class="px-4 py-3">{{__('profil.home.description')}}</th>
                                    <th class="px-4 py-3">{{__('profil.home.date_end')}}</th>
                                    <th class="px-4 py-3">{{__('profil.home.action')}}</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                {{-- @foreach ($tenders as  $tender)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div class="relative hidden w-10 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ asset('img/annonce/appel_offre.jpg') }}" alt=""
                                                        loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{(__("layouts.footer.tender"))}}</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{$tender->title}}
                                        </td>
                                        <td class="px-4 py-3 ">
                                            <p class="text-md text-gray-600 dark:text-gray-400">
                                                {{Str::limit($tender->content, 100, '...')}}
                                            </p>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{Carbon\Carbon::parse($tender->limit_date)->format('d/m/Y')}}
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <a href="/annonces">
                                                    <button
                                                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-100 hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                                        {{(__("layouts.footer.submit"))}} </button></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        @endsection
