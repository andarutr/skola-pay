<div>
    <div class="tm-section tm-checkout-area bg-white tm-padding-section">
        <div class="container">
            <div class="tm-checkout-coupon">
                @if($statusPage === 'payment')
                <a href="#" wire:click="checkPayment"><span style="color: gray !important; width: 10px;" id="pembayaran_spp">Klik Untuk Check Pembayaran</span>&nbsp;<span class="badge badge-primary" style="color: white;">check</span></a>
                @else
                <a href="#" wire:click="paymentSpp"><span style="color: gray !important; width: 10px;">Menuju Pembayaran SPP</span>&nbsp;<span class="badge badge-success" style="color: white;">check</span></a>
                @endif
            </div>
            @if($statusPage === 'payment')
            <livewire:payment-form />
            @else
            <livewire:check-payment-form />
            @endif
        </div>
    </div>

</div>
