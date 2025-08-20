@extends('layouts.app')

@section('content')
    <section class="projects-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-heading" data-aos="fade-up"><img src="{{ asset('assets/images/others/star.png') }}" alt="Star">
                        All Projects
                        <img src="{{ asset('assets/images/others/star.png') }}" alt="Star">
                    </h1>
                </div>
                @foreach ($works as $value)
                    <div class="col-md-4">
                        <div data-aos="zoom-in">
                            <div class="project-item shadow-box">
                                <a class="overlay-link" href="{{ route('work-detail', [$value['id']]) }}" target="_blank"></a>
                                <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                                <div class="project-img">
                                    <img src="{{ asset($value['thumbnail']) }}" alt="Project">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="project-info">
                                        <p>{{ $value['caption'] }}</p>
                                        <h1>{{ $value['name'] }}</h1>
                                    </div>
                                    <a href="{{ route('work-detail', [$value['id']]) }}" class="project-btn">
                                        <img src="{{ asset('assets/images/others/icon.svg') }}" alt="Button">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
