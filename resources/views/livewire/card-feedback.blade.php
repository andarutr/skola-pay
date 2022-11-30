<div class="col-lg-6">
    <div class="tm-contact-formwrapper">
        @if(session()->has('success'))
        <livewire:partials.notification.success-app />
        @endif
        <h5>Kotak Feedback</h5>
        
        <livewire:feedback-form>
    </div>
</div>
