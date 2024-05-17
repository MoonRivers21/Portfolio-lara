<x-app-layout :about="$personalDetails" :cvfile="$personalDetails->cv_file">

    {{--  Project slider  --}}
    <x-project-slider :projectSlider="$projectSlider"/>
    

    {{--  About me  --}}
    <x-about-me :personalDetails="$personalDetails"/>

    {{--  Experience --}}
    <x-experience :experiences="$experiences" :cvfile="$personalDetails->cv_file"/>

    {{--  Technical Skills  --}}
    <x-technical-skills :techskills="$techskills"/>

    {{--  TechStacks  --}}
    <x-tech-stacks :techstacks="$techstacks"/>

    {{--  Recent Projects  --}}
    <x-recent-project :projects="$recentProjects"/>

    {{--  Contact Me  --}}
    <x-contact-me :details="$personalDetails"/>

    <!-- loader -->
    <x-loader/>


</x-app-layout>
