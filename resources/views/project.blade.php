<x-layouts.project-layout :about="$personalDetails">
    
    <x-browse-project :projects="$projects->items()"
                      :paginationNext="$projects->nextPageUrl()"
                      :paginationPrev="$projects->previousPageUrl()"
                      :getCurrentPage="$projects->currentPage()"
                      :firstItem="$projects->firstItem()"
                      :lastItem="$projects->lastItem()"
                      :totalRecord="$projects->total()"
                      :hasMorepages="$projects->hasMorePages()"/>

</x-layouts.project-layout>
