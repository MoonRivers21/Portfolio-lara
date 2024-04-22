@props(['techskills'])

<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">Technical Skills</h2>
            </div>
        </div>
        <div class="row">
            @foreach($techskills as $techskill)
                <x-technical-skills-item
                    :stack_title="$techskill->stack_title"
                    :yr_exp="$techskill->calculateExperienceFormatted()"/>
            @endforeach


        </div>
    </div>
</section>
