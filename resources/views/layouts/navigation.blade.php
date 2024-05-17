<nav class="navbar navbar-expand-lg navbar-light ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Nick <span class="text-warning">Devs</span></a>
        <button class="navbar-toggler  fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#resume-experience" class="nav-link"><span>Experience</span></a></li>
                <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                <li class="nav-item"><a href="{{ asset('storage/'.$cvfile) }}"
                                        target="_blank"
                                        class="nav-link  "><span><i class="fa fa-download"></i> Download CV</span></a>
                </li>
                {{--                <li class="nav-item ml-md-auto">--}}
                {{--                    <div class="one-quarter nav-link" id="switch">--}}
                {{--                        <input type="checkbox" class="checkbox" id="chk"/>--}}
                {{--                        <label class="label" for="chk">--}}
                {{--                            <i class="fas fa-moon"></i>--}}
                {{--                            <i class="fas fa-sun"></i>--}}
                {{--                            <div class="ball"></div>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </li>--}}

            </ul>

        </div>
    </div>
</nav>
