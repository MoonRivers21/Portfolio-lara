<x-layouts.project-layout :about="$personalDetails">
 
    <x-browse-project :projects="$projects->items()"
                      :paginationNext="$projects->nextPageUrl()"
                      :paginationPrev="$projects->previousPageUrl()"/>

</x-layouts.project-layout>
