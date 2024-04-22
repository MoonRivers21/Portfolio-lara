@props(['stack_title', 'stack_img'])
<div class="col-md-4 col-lg-2 col-sm-12 d-flex justify-content-center align-items-center ftco-animate ">
    <div class="align-self-stretch box p-4 boxHover text-center ">
        <div class="icon d-flex align-items-center justify-content-center">
            <a href="https://laravel.com" target="_blank">
                <img width="96" height="96"
                     src="{{ $stack_img }}"
                     alt="{{ $stack_title }}-logo"/>
            </a>
        </div>
        <p>
            <a href="https://laravel.com" target="_blank">{{ $stack_title }}</a>
        </p>
    </div>
</div>
