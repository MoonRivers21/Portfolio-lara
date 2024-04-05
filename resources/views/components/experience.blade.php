@php use Carbon\Carbon; @endphp
@props(['experiences'])
<section class="ftco-section ftco-no-pb" id="resume-experience">
    <div class="container">

        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Experience</h1>
                <h2 class="mb-2">Experience</h2>
            </div>
        </div>
        <div class="row ">
            @foreach($experiences as $experience)
                <div class="col-md-12">
                    <div class="resume-wrap ftco-animate">
                        <div class="row ">
                            <div class="col-md-6 ftco-animate">
                                <span class="position">{{ $experience->company_name }}</span>
                                <h4>{{ $experience->job_title }}</h4>

                            </div>
                            <div class="col-md-6 text-right ftco-animate">
                                <span
                                    class="date font-weight-light">{{ Carbon::parse($experience->started_from)->format('M Y').' - '.Carbon::parse($experience->started_to)->format('M Y') }}</span>
                                <span class="small"><br>
                                    <span class="icon icon-map-marker text-primary"></span>
                                    <a href="https://maps.app.goo.gl/jGyFSsPw3gJUpEVd9"
                                       target="_blank">{{ $experience->company_addr }}</a>
                                </span>
                            </div>

                        </div>
                        <div class="ftco-animate">
                            {!!   $experience->job_desc !!}

                        </div>


                    </div>

                </div>

            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="#" class="btn btn-primary py-4 px-5" onclick="window.open('RSevillaCV.pdf')"
                      target="_blank">Download CV</a></p>
            </div>
        </div>
    </div>
</section>
