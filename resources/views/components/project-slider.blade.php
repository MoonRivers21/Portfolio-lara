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

                <div class="form-inline d-inline-flex w-100">
                    <div class="p-2 pl-5  mx-auto">
                        <i class="fa fa-long-arrow-left text-warning slider-button-prev "
                           style="cursor: pointer"></i>
                        &nbsp; &nbsp;
                        <i class="fa fa-long-arrow-right text-warning slider-button-next"
                           style="cursor: pointer"></i>
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
 
