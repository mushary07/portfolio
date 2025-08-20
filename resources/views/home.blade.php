@extends('layouts.app')

@section('content')
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-me-box shadow-box">
                        <a class="overlay-link" href="{{ route('about') }}"></a>
                        <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/home/mushary07.png') }}" alt="About Me">
                        </div>
                        <div class="infos">
                            <h4>FULL-STACK DEVELOPER</h4>
                            <h1>MUSHARI</h1>
                            <p>I’m a Laravel and Vue.js developer passionate about crafting scalable and responsive web
                                solutions.</p>
                            <a href="#" class="about-btn">
                                <img src="{{ asset('assets/images/others/icon.svg') }}" alt="Button">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-credentials-wrap">
                        <div data-aos="zoom-in">
                            <div class="banner shadow-box">
                                <div class="marquee">
                                    <div>
                                        <span>LATEST WORK AND <b>FEATURED</b> <img src="{{ asset('assets/images/home/dot.svg') }}"
                                                alt="Star"> LATEST WORK AND <b>FEATURED</b> <img
                                                src="{{ asset('assets/images/home/dot.svg') }}" alt="Star"> LATEST WORK AND
                                            <b>FEATURED</b> <img src="{{ asset('assets/images/home/dot.svg') }}" alt="Star">
                                            LATEST WORK AND <b>FEATURED</b> LATEST WORK AND <img
                                                src="{{ asset('assets/images/home/dot.svg') }}" alt="Star"> LATEST WORK AND
                                            <b>FEATURED</b> LATEST WORK AND <img src="{{ asset('assets/images/home/dot.svg') }}"
                                                alt="Star"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="gx-row d-flex gap-24">
                            <div data-aos="zoom-in">
                                <div class="about-crenditials-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="{{ route('credential') }}"></a>
                                    <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                                    <img src="{{ asset('assets/images/others/float-icon.png') }}" alt="Sign">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>more about me</h4>
                                            <h1>Credentials</h1>
                                        </div>

                                        <a href="{{ route('credential') }}" class="about-btn">
                                            <img src="{{ asset('assets/images/others/icon.svg') }}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in">
                                <div class="about-project-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="{{ route('works') }}"></a>
                                    <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                                    <img src="{{ asset('assets/images/home/projects.png') }}" alt="My Works">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>SHOWCASE</h4>
                                            <h1>Projects</h1>
                                        </div>

                                        <a href="#" class="about-btn">
                                            <img src="{{ asset('assets/images/others/icon.svg') }}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-client-box info-box shadow-box">
                        <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                        <div class="clients d-flex align-items-start gap-24 justify-content-center">
                            <div class="client-item">
                                <h1>04</h1>
                                <p>Years <br>Experience</p>
                            </div>

                            <div class="client-item">
                                <h1>+12</h1>
                                <p>CLIENTS <br>WORLDWIDE</p>
                            </div>

                            <div class="client-item">
                                <h1>+12</h1>
                                <p>Total <br>Projects</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-contact-box info-box shadow-box">
                        <a class="overlay-link" href="{{ route('contact') }}"></a>
                        <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                        <img src="{{ asset('assets/images/others/float-icon.png') }}" alt="Icon" class="star-icon">
                        <h1>Let's <br>work <span>together.</span></h1>
                        <a href="#" class="about-btn">
                            <img src="{{ asset('assets/images/others/icon.svg') }}" alt="Button">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
