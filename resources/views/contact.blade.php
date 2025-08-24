@extends('layouts.app')

@section('content')
    <section class="contact-area">
        <div class="container">
            <div class="gx-row d-flex justify-content-between gap-24">
                <div class="contact-infos">
                    <h3 data-aos="fade-up">Contact Info</h3>
                    <ul class="contact-details">
                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-mail"></i>
                            </div>
                            <div class="right">
                                <span>MAIL us</span>
                                <h4>mushari1999@gmail.com</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-phone"></i>
                            </div>
                            <div class="right">
                                <span>Contact Us</span>
                                <h4>+91 989-417-5023</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="iconoir-map"></i>
                            </div>
                            <div class="right">
                                <span>Location</span>
                                <h4>67 Paris Nagar, Vayalkarai Street, <br>Karaikal</h4>
                            </div>
                        </li>
                    </ul>

                    <h3 data-aos="fade-up">Social Info</h3>
                    <ul class="social-links d-flex align-center" data-aos="zoom-in">
                        <li><a class="shadow-box" href="https://www.linkedin.com/in/mushary07" target="_blank"
                                rel="noopener"><i class="iconoir-linkedin"></i></a></li>
                        <li><a class="shadow-box" href="https://www.instagram.com/mushary07" target="_blank"
                                rel="noopener"><i class="iconoir-instagram"></i></a></li>
                        <li><a class="shadow-box" href="https://www.facebook.com/mushary07" target="_blank"
                                wire:rel="noopener"><i class="iconoir-facebook"></i></a></li>
                    </ul>
                </div>

                <div data-aos="zoom-in" class="contact-form">
                    <div class="shadow-box">
                        <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                        <img src="{{ asset('assets/images/contact/float-icon.png') }}" alt="Icon">
                        <h1>Let’s work <span>together.</span></h1>
                        <form method="POST" action="{{ route('mail') }}">
                            @csrf

                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show messenger-box-contact__msg"
                                    role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- Error Messages --}}
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show messenger-box-contact__msg"
                                    role="alert">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="input-group">
                                <input type="text" name="name" id="full-name" placeholder="Name *"
                                    value="{{ old('name') }}" required>
                            </div>

                            <div class="input-group">
                                <input type="email" name="email" id="email" placeholder="Email *"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="input-group">
                                <input type="text" name="subject" id="subject" placeholder="Your Subject *"
                                    value="{{ old('subject') }}" required>
                            </div>

                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Your Message *" required>{{ old('message') }}</textarea>
                            </div>

                            <div class="input-group">
                                <button class="theme-btn submit-btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
