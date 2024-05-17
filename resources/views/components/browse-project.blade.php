@props(['projects', 'paginationNext', 'paginationPrev', 'hasMorepages', 'getCurrentPage', 'totalRecord', 'firstItem', 'lastItem'])


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

        <div class="row justify-content-between mt-5">
            @if($getCurrentPage <> 1)
                <div class="col-3 d-flex justify-content-center">
                    <a href="{{ $paginationPrev }}">
                        <div class="px-5 rounded-sm h3">
                            <i class="fa fa-arrow-left"></i>
                            Prev

                        </div>
                    </a>
                </div>
            @else
                <div class="col-3 d-flex justify-content-center">

                </div>
            @endif

            <div class="col-3 d-flex justify-content-center">
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $firstItem }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $lastItem }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $totalRecord }}</span>
                    {!! __('projects') !!}
                </p>

            </div>
            @if($hasMorepages)
                <div class="col-3 d-flex justify-content-center">
                    <a href="{{ $paginationNext }}">
                        <div class="px-5 rounded-sm h3">
                            Next
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            @else
                <div class="col-3 d-flex justify-content-center">

                </div>
            @endif

        </div>
    </div>

</section>
