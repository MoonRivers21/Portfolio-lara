@props(['techstacks'])

<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">TechStacks</h1>
                <h2 class="mb-4">TechStacks</h2>
            </div>
        </div>
        <div class="row ">
            @foreach($techstacks as $techstack)
                <x-tech-stacks-item :stack_title="$techstack->title" :stack_img="$techstack->logoImg()"/>
            @endforeach


        </div>
    </div>
</section>
