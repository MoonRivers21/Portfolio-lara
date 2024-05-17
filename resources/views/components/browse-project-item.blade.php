@props(['project', 'techStacks'])


<div class="col-md-4 d-flex ftco-animate projectItem">
    <div class="blog-entry justify-content-end projectItemItem">
        <a href="{{ route('project.view', $project->id) }}" class="block-20 rounded imgCover"
           style="background-image: url({{ asset('storage/'.$project->cover_image) }}); background-size: contain;">
        </a>
        <div class="text mt-3 float-right d-block">
            <div class="d-flex align-items-center mb-3 meta">
                <p class="mb-0">
                    <span class="mr-2"><i class="fa fa-clock"></i> {{ $project->reformmatedDate() }}</span>

                </p>
            </div>
            <h3 class="heading"><a href="{{ route('project.view', $project->id) }}">{{ $project->project_title }}</a>
            </h3>
            <p>
                {{ $project->shortDesc() }}
                <a href="{{ route('project.view', $project->id) }}" class="small">
                    Read more
                </a>
            </p>
            <div class="tagcloud mt-4">
                @foreach($techStacks as $techStack)
                    <a href="#" class="tag-cloud-link border border-warning">
                        {{ $techStack }}
                    </a>
                @endforeach

            </div>
        </div>
    </div>

</div>
