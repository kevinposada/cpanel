<div>
    <input id="card-holder-name" type="text">
    <!-- Stripe Elements Placeholder -->
    <div id="card-element"></div>
    <button id="card-button" data-secret="{{ $intent->client_secret }}">
        Update Payment Method
    </button>
    @slot('js')
        <script>
            const stripe = Stripe('pk_test_51I9vSLKJ3C3ruftmZ4lha760ulxMl4J7Ra61r7HKwTwe88muXz7dsiVENtz9VYANonEjysKWIB9vhq1uNrRh61YJ00PDCmLhJH');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');
        </script>
    @endslot
</div>