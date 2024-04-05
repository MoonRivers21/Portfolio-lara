<x-app-layout>
    {{--  Project slider  --}}
    <x-project-slider/>

    {{--  Experience --}}
    <x-experience :experiences="$experiences"/>

    {{--  About me  --}}
    <x-about-me/>

    {{--  Technical Skills  --}}
    <x-technical-skills/>

    {{--  TechStacks  --}}
    <x-tech-stacks/>

    {{--  Recent Projects  --}}
    <x-recent-project/>

    {{--  Contact Me  --}}
    <x-contact-me/>


    <!-- loader -->
    <x-loader/>


</x-app-layout>
