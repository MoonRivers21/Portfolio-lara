@props(['stack_title', 'yr_exp'])

<div class="col-md-4 animate-box">
    <div class="progress-wrap ftco-animate">
        <h3>{{ $stack_title }} <small>({{  $yr_exp }})</small></h3>
        <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="95"
                 aria-valuemin="0" aria-valuemax="100" style="width:100%">
            </div>
        </div>
    </div>
</div>
