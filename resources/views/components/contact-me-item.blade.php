@props(['title', 'link', 'iconlink'])

@php


    if(strtolower($title) == 'mobile'){
       $link = 'tel:'.$link;
    }

    else if(strtolower($title) == 'email'){
       $link = 'mailto:'.$link;
    }
    
@endphp


<div class="col-md-6 col-lg-3 d-flex ftco-animate">
    <div class="align-self-stretch box p-3 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
            <span class="{{ $iconlink }}"></span>
        </div>
        <h3 class="mb-4">{{ $title }}</h3>
        <p><a href="{{ $link }}" target="_blank">View {{ $title }}</a></p>
    </div>
</div>
