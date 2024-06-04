@props(['title', 'description', 'shortDesc', 'projectImg', 'techStacks', 'link'])
<div class="col-md-4 col-sm-12 col-12 ftco-animate justify-content-center d-flex mb-3">
    <article class="card">
        <div class="cover-img">
            <img src="{{ asset('storage/'.$projectImg) }}"/>
        </div>
        <div class="card_content">
            <span class="card_title">{{ $title }}</span>
            <div class="text-sm small">Tech stacks:</div>
            <div class="tagcloud text-sm small">
                @foreach($techStacks as $techStack)
                    <span
                        class="tag-cloud-link text-danger border-danger  m-1">{{ $techStack }}</span>
                @endforeach


            </div>
            <p class="card_description ">{!! $description !!} <a target="_blank"
                                                                 href="{{ $link }}"
                                                                 class="text-danger">Read more</a></p>

        </div>
    </article>
</div>
