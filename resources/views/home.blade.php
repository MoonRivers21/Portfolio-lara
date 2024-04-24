<x-app-layout>
    {{--  Project slider  --}}
    <x-project-slider/>

    {{--  Experience --}}
    <x-experience :experiences="$experiences"/>

    {{--  About me  --}}
    <x-about-me/>

    {{--  Technical Skills  --}}
    <x-technical-skills :techskills="$techskills"/>

    {{--  TechStacks  --}}
    <x-tech-stacks :techstacks="$techstacks"/>

    {{--  Recent Projects  --}}
    <x-recent-project :projects="$recentProjects"/>

    {{--  Contact Me  --}}
    <x-contact-me/>


    <!-- loader -->
    <x-loader/>


</x-app-layout>
