@php use Carbon\Carbon; @endphp
@props(['personalDetails'])

<div>

    <section class="ftco-about ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center ftco-animate"
                             style="background-image:url({{asset('images/pic-removebg-preview.png')}}); border-top-left-radius: 140px; border-bottom-right-radius: 140px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5  ">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p class="text-justify ">{{ $personalDetails->introduction }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{ $personalDetails->fullname }}</span></li>
                                <li class="d-flex"><span>Date of birth:</span>
                                    <span>{{ Carbon::parse($personalDetails->birthdate)->format('M d, Y') }}</span>
                                </li>
                                <li class="d-flex"><span>Address:</span> <span>{{ $personalDetails->address }}</span>
                                </li>
                                <li class="d-flex"><span>Email:</span> <span>{{ $personalDetails->email }}</span></li>
                                <li class="d-flex"><span>Mobile: </span> <span> {{ $personalDetails->mobile }}</span>
                                </li>
                            </ul>

                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                @if(!empty($personalDetails->facebook))
                                    <li class="ftco-animate">
                                        <a target="_blank" href="{{ $personalDetails->facebook }}">
                                            <span class="icon-facebook"></span>
                                        </a>
                                    </li>
                                @endif

                                @if(!empty($personalDetails->linkedIn))
                                    <li class="ftco-animate">
                                        <a target="_blank" href="{{ $personalDetails->linkedIn }}">
                                            <span class="icon-linkedin-square"></span>
                                        </a>
                                    </li>
                                @endif


                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p>

                                @if(!empty($personalDetails->cv_file))
                                    <a href="{{ asset('storage/'.$personalDetails->cv_file) }}"
                                       class="btn btn-primary py-3 px-3"

                                       target="_blank">Download CV</a>
                                @endif


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
