@props(['title', 'link', 'iconlink'])

@php
    $label = '';
    $links = '';

    if(strtolower($title) == 'mobile' || strtolower($title) == 'viber' || strtolower($title) == 'whatsapp'){
       $links = 'tel:'.$link;
       $label = $link;
    }

    else if(strtolower($title) == 'email'){
       $links = 'mailto:'.$link;
       $label = $link;

    }else{
       $links = $link;
       $label = 'View '.$title;

    }




@endphp


<div class="col-md-6 col-lg-3 d-flex ftco-animate">
    <div class="align-self-stretch box p-3 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
            <span class="{{ $iconlink }}"></span>
        </div>
        <h3 class="mb-4">{{ $title }}</h3>
        <p><a href="{{ $links }}" target="_blank">{{ $label }}</a></p>
    </div>
</div>
