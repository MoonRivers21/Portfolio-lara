@props(['projectSlider'])

<section class="ftco-section ftco-no-pb" id="projectslider-section">
    <div class="container">
        <div class="col-12">
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
                    @foreach($projectSlider as $project)
                        <x-project-slider-item :project="$project"
                                               :techStacks="$project->techStacks($project->tech_stack_id)"/>

                    @endforeach

                </div>
                <div class="blog-slider__pagination"></div>


                <div class="mt-3">
                    <div class="row d-flex justify-content-between ">
                        <div class="col-4">
                            <div class="slider-button-prev text-center h3">
                                <span class="fa-2x text-warning "
                                      title="Previous"
                                      style="cursor: pointer">&laquo;</span>

                            </div>

                        </div>

                        <div class="col-4">
                            <div class="slider-button-next text-center h3">
                                <span class="fa-2x text-warning "
                                      title="Next"
                                      style="cursor: pointer">&raquo;</span>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="{{ route('project.index') }}" class="btn btn-warning py-4 px-5" target="_blank">Browse
                        more</a></p>
            </div>
        </div>
    </div>
</section>

