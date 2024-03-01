@foreach ($demandesCountByType as $type => $count)
    @if ($count > 0)
        <li class="flex">
            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                href="{{route('Front.profil.etat-demande')}}">
                <span>{{ $type }}</span>

                <span
                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                    {{ $count }}
                </span>
            </a>
        </li>
        @else
        <li class="flex">
            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 "
                href="#">
                <span>Aucune demande de {{ $type }}</span>
                <a>
        </li>
    @endif
@endforeach
