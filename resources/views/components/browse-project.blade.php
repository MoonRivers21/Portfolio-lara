@props(['projects', 'paginationNext', 'paginationPrev'])

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Projects</h2>
                <p>Recent develop projects</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($projects as $project)
                <x-browse-project-item :project="$project" :techStacks="$project->techStacks($project->tech_stack_id)"/>
            @endforeach

        </div>

        <div class="row justify-content-between">
            <div class="col-3 d-flex justify-content-center">
                <div class="border px-5 rounded-sm h3">
                    <a href="{{ $paginationPrev }}"> <i class="fa fa-arrow-left"></i></a>

                </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <div class="border px-5 rounded-sm h3">

                    <a href="{{ $paginationNext }}"> <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

</section>
