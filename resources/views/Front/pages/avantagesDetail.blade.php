@extends('layouts')

@section('content')

<div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
    <div class="p-5 py-20 mx-2 xl:mx-48">
        <div class="max-w-2xl mx-auto p-6">
            <img src="https://placehold.co/400" alt="News Image" class="w-full h-64 object-cover mb-4 rounded-lg">
            <h1 class="text-4xl font-bold mb-4">{{$query}}</h1>
            <p class="font-bold text-lg mb-4">Date de publication : 16 janvier 2024</p>

            <div class="prose max-w-none text-justify">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam enim illo assumenda tenetur, soluta repellendus adipisci rem repellat provident, quia ipsa atque qui, sed nobis consectetur facilis? Minus, aliquid. Reprehenderit.
                    Fugit in distinctio nemo nulla nam provident eligendi! Voluptates maiores cumque, perspiciatis exercitationem, alias ducimus ab molestias eum recusandae soluta eaque, tempore fuga numquam vero error quaerat facere doloremque rerum?
                    Qui cum numquam quod distinctio a. Animi sunt repellendus et iste similique voluptate nulla voluptatibus vel doloremque nam delectus, vero distinctio minus. Deleniti accusamus eius cupiditate consequuntur vitae. Pariatur, est?
                </p>
            </div>

        </div>
    </div>
</div>


@endsection
