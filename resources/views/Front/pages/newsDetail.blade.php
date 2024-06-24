@extends('layouts')

@section('content')
<style>
.resume {
    font-size: 1em; /* Slightly larger font size */
    font-weight: 400; /* Bold font */
    color: #333; /* Blue color */
    background-color: #e8f7f6; /* Light blue background */
    padding: 15px; /* Padding around text */
    border-left: 5px solid #1a73e8; /* Blue left border */
    margin-bottom: 15px; /* Space below the resume */
    border-radius: 5px; /* Rounded corners */

}

.description {
    font-size: 1em; /* Regular font size */
    font-weight: 400; /* Normal font weight */
    color: #333; /* Darker color */
    background-color: #ffffff; /* White background */
    padding: 10px; /* Padding around text */
    border-left: 5px solid #e8541a;
    margin-top: 15px; /* Space above the description */
    border-radius: 5px; /* Rounded corners */
    line-height: 1.6; /* Line height for better readability */

}

h6 svg {
    margin-right: 8px;
}

</style>


<div class=" bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
    <div class="p-5 py-20 mx-2 xl:mx-48">
        <div class="max-w-2xl mx-auto p-6">
            <img src="{{asset('storage/' .  $activity->translator['image'])}}" alt="News" class="w-full h-64 object-cover mb-4 rounded-lg">

            <h1 class="text-3xl font-bold mb-4">{{$activity->translator['title']}}</h1>

            <h4 class="text-gray-600 font-medium text-md mb-4 text-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3M3 11h18M4 21h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>

                Date de publication :  {!! $activity->translator['limit_date'] !!}</h4>

            <div class="prose max-w-none text-justify mb-4" >
                <div class="resume"> {!! $activity->translator['resume'] !!} </div>
                <br>
                <div class="description">{!! $activity->translator['content'] !!}</div>
                <br>

                @if ($activity->file)
                    <p>Vous pouvez obtenir plus de détails en téléchargeant le fichier ci-dessous : </p>
                    <div class=" py-4 xl:py-4">
                        <div class="flex flex-row ml-2 pb-4">
                            <div class="w-1/5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <div class="w-3/5">
                                <a href="{{ asset('storage/' . $activity->translator['file']) }}" class="underline hover:underline">
                                    <div class="text-lg">
                                        {!! __('news.job.download.file') !!}
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/5">
                                <a href="{{ asset('storage/' . $activity->file) }}" title="{{ $activity->title }}"
                                    class="underline hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                </a>
                            </div>
                            <div></div>
                        </div>
                    </div>
                @endif
            </div>

            @if ($additionalImages && count($additionalImages) > 0)
                <div class="similar-news mb-8">
                    <h2 class="text-2xl font-bold mb-4">Images associées</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">

                        @foreach ($additionalImages as $image)

                            <div class="mb-3">
                                <img src="{{ asset('storage/'.$image->path) }}" alt="Image additionnelle" class="h-48 xl:h-64 lg:h-64 w-full">
                            </div>

                        @endforeach
                    </div>
                </div>
            @endif
                <button type="button" style="background-color: #F18700" class="pl-4 pr-4 pt-2 pb-2 font-medium rounded-none white " >
                    <a href="{{route('actu')}}">  Retour </a>
                </button>
        </div>

    </div>
</div>


@endsection
