@props(['projects'])

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Recent Projects</h2>

            </div>
        </div>
        <div class="row">
            @foreach($projects as $project)

                <x-recent-project-item
                    :title="$project->project_title"
                    :description="$project->longDescProject()"
                    :shortDesc="$project->shortDescProject()"
                    :projectImg="$project->cover_image"
                    :techStacks="$project->techStacks($project->tech_stack_id)"
                    :link="route('project.view', $project->id)"

                />

            @endforeach


        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="{{ route('project.index') }}" class="btn btn-warning py-4 px-5" target="_blank">Browse
                        more</a></p>
            </div>
        </div>
    </div>
</section>

