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
                                    {{-- {{ $paymentMethod }} --}}
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

    <script>
        const stripe = Stripe('pk_test_51I9vSLKJ3C3ruftmZ4lha760ulxMl4J7Ra61r7HKwTwe88muXz7dsiVENtz9VYANonEjysKWIB9vhq1uNrRh61YJ00PDCmLhJH');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        // Generar token
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const cardForm = document.getElementById('card-form');
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('submit', async (e) => {

            e.preventDefault;
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );

            if (error) {
                // Display "error.message" to the user...
                document.getElementById("cards-errors").textContent = error.message;
            } else {
                // The card has been verified successfully...
                // e.emit('paymentMethodCreate', setupIntent.payment_method);
                var myEmit = {};
                extend(myEmit, EventEmitter);
                myEmit.emit("paymentMethodCreate", setupIntent.payment_method);
            }
        });

    </script>
</div>