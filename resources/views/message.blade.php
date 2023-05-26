@extends('layouts')


@section('content')
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Message</h6>
                <h1 class="display-6 mb-4">Les Messages reçus</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($messages as $message)
                    <div class="testimonial-item bg-light rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            {{--<img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">--}}
                            <div class="ms-4">
                                <h5 class="mb-1">{{$message->name}} - {{$message->email}}</h5>
                                <span>{{$message->subject}}</span>
                            </div>
                        </div>
                        <p class="mb-0">{{$message->message}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
