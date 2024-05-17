@props(['project', 'techStacks'])


<div class="blog-slider__item swiper-slide">
    <div class="blog-slider__img">
        <img
            src="{{ asset('storage/'.$project->cover_image) }}"
            loading="lazy"
            alt="{{ $project->project_title }}">

    </div>
    <div class="blog-slider__content">
        <span class="blog-slider__code">{{ $project->reformmatedDate() }}</span>
        <div class="blog-slider__title text-light">
            <a target="_blank" href="{{ route('project.view', $project->id) }}">
                {{ $project->project_title }}
            </a>
        </div>
        <div class="blog-slider__text text-light">
            {{ $project->longDescProject() }} &nbsp;
            @if(strlen($project->longDescProject()) > 250)
                <a target="_blank" href="{{ route('project.view', $project->id) }}">Read more</a>
            @endif

            <div class="tagcloud mt-4">
                @foreach($techStacks as $techStack)
                    <a href="#" class="tag-cloud-link">
                        {{ $techStack }}
                    </a>
                @endforeach

            </div>
        </div>

    </div>
</div>
