@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content" data-aos="fade-up">
                <p>{{ $work['caption'] }}</p>
                <h1 class="section-heading">
                    <img src="{{ asset('assets/images/others/star.png') }}" alt="Star">
                    {{ $work['name'] }}
                    <img src="{{ asset('assets/images/others/star.png') }}" alt="Star">
                </h1>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="project-details-wrap">
        <div class="project-details-img" data-aos="zoom-in">
            <img src="{{ asset($work['banner-1']) }}" alt="Project Details">
        </div>

        <div class="container">
            <div data-aos="zoom-in">
                <div class="d-flex project-infos-wrap shadow-box mb-24">
                    <img src="{{ asset('assets/images/bg1.png') }}" alt="BG" class="bg-img">
                    <img src="{{ asset('assets/images/others/float-icon.png') }}" alt="Icon">
                    <div class="project-details-info flex-1">
                        <h3>{{ $work['name'] }}</h3>
                        <p>{{ $work['description'] }}</p>
                    </div>

                    <div class="project-details-info flex-1">
                        <h3>About</h3>
                        <p>{{ $work['about'] }}</p>
                    </div>
                </div>
            </div>

            <div class="project-details-2-img mb-24" data-aos="zoom-in">
                <img src="{{ asset($work['banner-2']) }}" alt="Project">
            </div>

            <div class="row mb-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="{{ asset($work['gallery-1']) }}" alt="Project">
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="{{ asset($work['gallery-2']) }}" alt="Project">
                    </div>
                </div>
            </div>

            <div class="row mb-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="{{ asset($work['gallery-3']) }}" alt="Project">
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="{{ asset($work['gallery-4']) }}" alt="Project">
                    </div>
                </div>
            </div>

            <div data-aos="zoom-in">
                <div class="project-about-2 d-flex shadow-box mb-24">
                    <img src="{{ asset('assets/images/bg1.png') }}" alt="BG" class="bg-img">
                    <div class="left-details">
                        <img src="{{ asset('assets/images/others/float-icon.png') }}" alt="Icon">
                        <ul>
                            @foreach ($work['content'] as $value)
                                <li>
                                    <p>{{ $value['title'] }}</p>
                                    <h4>{{ $value['value'] }}</h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="right-details">
                        <h3>Description</h3>
                        <p>{{ $work['timeline_description'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-details-img" data-aos="zoom-in">
            <img src="{{ asset($work['banner-3']) }}" alt="Project Details">
        </div>

        <div class="container d-flex align-items-center justify-content-center gap-5" data-aos="zoom-in">
            @if ($id > $minId)
                <a href="{{ route('work-detail', [$id - 1]) }}" class="small-btn shadow-box">
                    Previous Project
                </a>
            @endif

            @if ($id < $maxId)
                <a href="{{ route('work-detail', [$id + 1]) }}" class="small-btn shadow-box">
                    Next Project
                </a>
            @endif
        </div>

    </section>
@endsection
