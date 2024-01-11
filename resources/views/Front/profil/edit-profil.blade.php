@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">

        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h2 class="mb-4 text-2xl font-semibold text-gray-600 dark:text-gray-300">
                {{__('profil.profil_edit.title')}}
            </h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-blue-500 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">{{__('profil.profil_edit.company')}}</th>
                                <th class="px-4 py-3">{{__('profil.profil_edit.demande')}}</th>
                                <th class="px-4 py-3">{{__('profil.profil_edit.date')}}</th>
                                <th class="px-4 py-3">{{__('profil.profil_edit.document')}}</th>
                                <th class="px-4 py-3">{{__('profil.profil_edit.status')}}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($demandes as $demande)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        {{ $demande->user->company->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $demande->title }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $demande->created_at }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <ul class="space-y-2">
                                            @forelse ($demande->documents as $doc)
                                                <li class="flex items-center">
                                                    <span class="mr-2">{{ $doc->typeDeDocument->name ?? '' }}</span>
                                                    @if ($doc->fichier)
                                                        <a href="{{ route('telecharger-document', ['id' => $doc->id]) }}" class="text-blue-500">
                                                            <img src="{{ asset('img/icon/statut.png') }}" width="20" class="mr-1" />

                                                        </a>
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="text-gray-600 dark:text-gray-400">{{__('profil.document.empty')}}</li>
                                            @endforelse
                                        </ul>
                                    </td>


                                    <td class="px-4 py-3 text-xs">
                                        @if ($demande->status == 'en_attente')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                {{ $demande->status }}
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                {{ $demande->status }}
                                            </span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
