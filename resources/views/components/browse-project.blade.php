@props(['projects'])
<section class="ftco-section" id="blog-section">
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
    </div>
</section>
