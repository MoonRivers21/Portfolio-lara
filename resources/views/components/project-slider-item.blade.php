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
        <div class="blog-slider__title text-light">{{ $project->project_title }}</div>
        <div class="blog-slider__text text-light">
            {{ $project->longDescProject() }}
            <div class="tagcloud mt-4">
                @foreach($techStacks as $techStack)
                    <a href="#" class="tag-cloud-link">
                        {{ $techStack }}
                    </a>
                @endforeach

            </div>
        </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
    </div>
</div>
