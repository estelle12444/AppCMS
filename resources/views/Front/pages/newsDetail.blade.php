@extends('layouts')

@section('content')
<div class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
    <div class="p-5 py-20 mx-2 xl:mx-48">
        <div class="max-w-2xl mx-auto p-6">

            <img src="https://via.placeholder.com/800x400" alt="News Image" class="w-full h-64 object-cover mb-4 rounded-lg">

            <h1 class="text-3xl font-bold mb-2">Titre de la News</h1>

            <p class="text-gray-600 text-sm mb-4">Date de publication : 16 janvier 2024</p>

            <div class="prose max-w-none">
                <p>Le contenu de votre news va ici. Vous pouvez ajouter autant de texte que nécessaire.</p>
                <p>Vous pouvez également utiliser des balises HTML standard, comme des listes :</p>
                <ul>
                    <li>Point 1</li>
                    <li>Point 2</li>
                    <li>Point 3</li>
                </ul>
            </div>

        </div>
    </div>
</div>


@endsection
