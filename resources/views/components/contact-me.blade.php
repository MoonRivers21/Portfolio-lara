@props(['details'])
<section class="ftco-section contact-section mb-5" id="contact-section">
    <div class="container mb-5">
        <div class="row justify-content-center mb-2  ">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
                <p>Let's Connect</p>
            </div>
        </div>

        <div class="row d-flex contact-info ">
            {{-- LinkedIn --}}
            <x-contact-me-item :title="'LinkedIn'" :link="$details->linkedIn" :iconlink="'icon-linkedin'"/>

            {{-- contact num --}}
            <x-contact-me-item :title="'Mobile'" :link="$details->mobile"
                               :iconlink="'fa fa-mobile fa-2x text-primary'"/>

            {{-- email add --}}
            <x-contact-me-item :title="'Email'" :link="$details->email"
                               :iconlink="'icon-paper-plane'"/>

            {{-- viber --}}
            <x-contact-me-item :title="'Viber'" :link="$details->viber"
                               :iconlink="'fas fa-phone fa-2x text-primary'"/>

            {{-- whatsapp --}}
            <x-contact-me-item :title="'Whatsapp'" :link="$details->whatsapp"
                               :iconlink="'fas fa-comments fa-2x text-primary'"/>

            
        </div>
    </div>
</section>
