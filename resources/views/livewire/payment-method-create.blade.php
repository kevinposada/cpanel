<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" id="card-form" style="display: contents">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Agregar método de pago</h4>
                                    <div style="display: flex">
                                        <p>Información de tarjeta</p>
                                        <div class="ml-3 col-md-10">
                                            <input id="card-holder-name" type="text" placeholder="Nombre de el titular de la tarjeta" required>
                                            <!-- Stripe Elements Placeholder -->
                                            <div class="col-md-12" id="card-element"></div>

                                            <span id="cards-errors"></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary col-md-3 ml-auto m-3" id="card-button" data-secret="{{ $intent->client_secret }}">
                                    Update Payment Method
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    <script>
        const stripe = Stripe("{{ env('STRIPE_KEY') }}");
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        // Generar token
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const cardForm = document.getElementById('card-form');
        const clientSecret = cardButton.dataset.secret;

        $(cardButton).click(async function(e) {
            alert();
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            ).then(function(result) {
                alert();
                if (result.error) {
                // Display "error.message" to the user...
                // document.getElementById("cards-errors").textContent = error.message;
                $('#cards-errors').text('no va');
                alert('no va');
                } else {
                    // The card has been verified successfully...
                    // alert(setupIntent.payment_method);
                    alert('va');
                    alert(setupIntent);
                    $('#cards-errors').text(setupIntent);
                    // Livewire.emit('paymentMethodCreate', setupIntent.payment_method);
                }
            });
            
        });

        // cardButton.onclick = async function(e){
        //     e.preventDefault;
        //     const { setupIntent, error } = await stripe.confirmCardSetup(
        //         clientSecret, {
        //             payment_method: {
        //                 card: cardElement,
        //                 billing_details: { name: cardHolderName.value }
        //             }
        //         }
        //     );
        //     if (error) {
        //         // Display "error.message" to the user...
        //         document.getElementById("cards-errors").textContent = error.message;
        //         Livewire.emit('paymentMethodCreate', 'no va');
        //         alert();
        //     } else {
        //         // The card has been verified successfully...
        //         Livewire.emit('paymentMethodCreate', setupIntent.payment_method);
        //         alert('va');
        //     }
        // };

        // cardForm.addEventListener('submit', async (e) => {
        //     e.preventDefault;
        //     const { setupIntent, error } = await stripe.confirmCardSetup(
        //         clientSecret, {
        //             payment_method: {
        //                 card: cardElement,
        //                 billing_details: { name: cardHolderName.value }
        //             }
        //         }
        //     );
        //     alert();
        //     if (error) {
        //         // Display "error.message" to the user...
        //         // document.getElementById("cards-errors").textContent = error.message;
        //         $('#cards-errors').text(error.message);
        //         alert('no va');
        //     } else {
        //         // The card has been verified successfully...
        //         alert('va');
        //         Livewire.emit('paymentMethodCreate', setupIntent.payment_method);
        //         $('#cards-errors').text('va');
        //     }
        // });

    </script>
</div>