@extends('layouts.app')

@section('content')
    <section class="credential-area">
        <div class="container">
            <div class="gx-row d-flex">
                <div class="credential-sidebar-wrap" data-aos="zoom-in">
                    <div class="credential-sidebar text-center">
                        <div class="shadow-box">
                            <img src="{{ asset('assets/images/others/bg.png') }}" alt="BG" class="bg-img">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/home/mushary07.png') }}" alt="About Me">
                            </div>
                            <h2>Mushari H</h2>
                            <p>@mushary07</p>

                            <ul class="social-links d-flex justify-content-center">
                                <li><a href="https://www.linkedin.com/in/mushary07" target="_blank"><i class="iconoir-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/mushary07" target="_blank"><i class="iconoir-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/mushary07" target="_blank"><i class="iconoir-facebook"></i></a></li>
                            </ul>

                            <a href="{{ route('contact') }}" class="theme-btn">Contact Me</a>
                        </div>
                    </div>
                </div>

                <div class="credential-content flex-1">
                    <div class="credential-about" data-aos="zoom-in">
                        <h2>About Me</h2>
                        <p>"Hi, I'm Mushari, and I have 4 years of experience in application development. I've worked on
                            building web applications, developing APIs, and integrating front-end technologies like Vue.js.
                            I'm skilled in database management, optimizing performance, and ensuring secure, efficient code.
                            I'm passionate about learning and improving my skills to deliver quality work.</p>
                    </div>

                    <div class="credential-edc-exp credential-experience">
                        <h2 data-aos="fade-up">Experience</h2>
                        <div class="credential-edc-exp-item" data-aos="zoom-in">
                            <h4>2023 - Present</h4>
                            <h3>Ahsan Solutions</h3>
                            <h5>Systems Engineer</h5>
                            <p>
                                Leading engineering initiatives to design, develop, and optimize scalable web and mobile
                                solutions,
                                while ensuring performance, security, and reliability across platforms.
                            </p>
                            <ul>
                                <li>Architected and optimized system infrastructures to ensure high availability,
                                    scalability, and performance.</li>
                                <li>Developed RESTful APIs with <strong>Laravel</strong> and integrated
                                    <strong>Vue.js</strong> for responsive and dynamic user interfaces.
                                </li>
                                <li>Implemented <strong>real-time features</strong> using Laravel Reverb and Firebase Cloud
                                    Messaging for seamless notifications.</li>
                                <li>Enhanced system efficiency by streamlining deployment pipelines, database structures,
                                    and caching strategies.</li>
                                <li>Collaborated with cross-functional teams to deliver user-centric solutions with robust
                                    security and maintainability.</li>
                            </ul>
                        </div>

                        <div class="credential-edc-exp-item" data-aos="zoom-in">
                            <h4>2021 - 2023</h4>
                            <h3>Ahsan Solutions</h3>
                            <h5>Assistant Systems Engineer</h5>
                            <p>
                                Supported the development and deployment of enterprise-level solutions with a strong focus
                                on
                                multi-tenant SaaS platforms and system integrations.
                            </p>
                            <ul>
                                <li>Contributed to multi-vendor projects, collaborating with stakeholders to ensure seamless
                                    integration and optimized system performance.</li>
                                <li>Implemented <strong>SaaS solutions</strong> using Laravel Tenancy, enabling efficient
                                    multi-tenant architecture and scaling.</li>
                                <li>Assisted in developing backend APIs and frontend features for client projects, ensuring
                                    timely delivery and quality standards.</li>
                                <li>Improved application workflows by introducing automation and reusable components across
                                    projects.</li>
                            </ul>
                        </div>

                    </div>

                    <div class="credential-edc-exp credential-education">
                        <h2 data-aos="fade-up">Education</h2>
                        <div class="credential-edc-exp-item" data-aos="zoom-in">
                            <h4>2017 - 2020</h4>
                            <h3>Bachelor of Computer Application (BCA)</h3>
                            <h5>E.G.S. Pillay Arts & Science College, Nagapattinam</h5>
                            <p>
                                Gained a strong foundation in computer science, programming, and software development.
                                Focused on areas such as web development, database management, networking, and system
                                analysis.
                                Actively participated in academic projects that strengthened problem-solving and technical
                                skills.
                            </p>
                        </div>

                        <div class="credential-edc-exp-item" data-aos="zoom-in">
                            <h4>2014 - 2016</h4>
                            <h3>Higher Secondary School Certificate (HSC)</h3>
                            <h5>St. Mary’s Higher Secondary School, Karaikal</h5>
                            <p>
                                Specialized in Computer Science and Mathematics, developing analytical and logical reasoning
                                skills.
                                Built a strong academic base that supported further studies in computer applications and
                                software engineering.
                            </p>
                        </div>
                    </div>

                    <div class="skills-wrap">
                        <h2 data-aos="fade-up">Skills</h2>
                        <div class="d-grid skill-items gap-24 flex-wrap">

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">95%</span>
                                <h3 class="name">Laravel</h3>
                                <p>API & backend development</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">90%</span>
                                <h3 class="name">Vue.js</h3>
                                <p>SPA & frontend frameworks</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">80%</span>
                                <h3 class="name">CodeIgniter</h3>
                                <p>MVC web applications</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">92%</span>
                                <h3 class="name">PHP</h3>
                                <p>Web application logic</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">90%</span>
                                <h3 class="name">MySQL</h3>
                                <p>Database design & queries</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">85%</span>
                                <h3 class="name">Livewire</h3>
                                <p>Dynamic Laravel components</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">80%</span>
                                <h3 class="name">TypeScript</h3>
                                <p>Typed JavaScript</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">88%</span>
                                <h3 class="name">JavaScript</h3>
                                <p>Frontend interactivity</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">87%</span>
                                <h3 class="name">AJAX</h3>
                                <p>Async data handling</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">89%</span>
                                <h3 class="name">jQuery</h3>
                                <p>DOM & UI scripting</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">91%</span>
                                <h3 class="name">TailwindCSS</h3>
                                <p>Utility-first styling</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">88%</span>
                                <h3 class="name">Bootstrap</h3>
                                <p>Responsive layouts</p>
                            </div>

                            <div class="skill-item" data-aos="zoom-in">
                                <span class="percent">85%</span>
                                <h3 class="name">Vuetify</h3>
                                <p>Material UI for Vue</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
