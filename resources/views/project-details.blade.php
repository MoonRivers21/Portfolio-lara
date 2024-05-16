<x-layouts.project-layout :about="$personalDetails" :project="$project">

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h5 class="mb-4">{{ $project->project_title }}</h5>
                </div>

            </div>

            <div class="row ftco-animate">
                <div class="col-md-8">
                    <div class="row resume-wrap ">
                        {{ $project->project_desc }}
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="ftco-animate">Screenshot Gallery</h5>
                            <div class="swiper swiperGallery">
                                <div class="">
                                    <div class="p-1 popup-gallery">
                                        @foreach($project->getImagePaths() as $imagePath)
                                            <a href="{{ asset('storage/'.$imagePath) }}"
                                               style="width:193px;height:125px;"
                                               title="{{$project->project_title}}"
                                               class="image-link-{{ md5($imagePath) }}">
                                                <img
                                                    class="p-2 ftco-animate"
                                                    height="100px"
                                                    alt="Project Image"
                                                    src="{{ asset('storage/'.$imagePath) }}"/>
                                            </a>
                                        @endforeach


                                    </div>


                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 sidebar-box ftco-animate">
                    <div class="mb-4">Develop last {{ $project->reformmatedDate() }}</div>

                    <h3 class="heading-sidebar">Tech Stacks</h3>
                    <ul class="categories">
                        @foreach($project->techStacksWithImage($project->tech_stack_id) as $techStack)
                            <li>
                                <a href="#">{{ $techStack['title'] }}
                                    <span>
                                    <img
                                        height="20px"
                                        width="20px"
                                        src="{{ $techStack['img_link'] }}"/>
                                </span>
                                </a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>


        </div>
    </section>


</x-layouts.project-layout>
