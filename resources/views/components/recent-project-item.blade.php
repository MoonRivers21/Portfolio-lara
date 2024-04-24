@props(['title', 'description', 'shortDesc', 'projectImg', 'techStacks'])
<div class="col-md-4 mt-3 ">
    <article class="card ftco-animate">
        <div class="cover-img">
            <img src="{{ asset('storage/'.$projectImg) }}"/>
        </div>
        <div class="card_content">
            <span class="card_title">{{ $title }}</span>
            <div class="text-sm small">Tech stacks:</div>
            <div class="tagcloud text-sm small">
                @foreach($techStacks as $techStack)
                    <span
                        class="tag-cloud-link text-danger border-danger border rounded p-1">{{ $techStack }}</span>
                @endforeach


            </div>
            <p class="card_description ">{!! $description !!} <a href="#" class="text-danger">Read more</a></p>

        </div>
    </article>
</div>
