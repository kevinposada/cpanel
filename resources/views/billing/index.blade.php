@extends('layouts.main', ['activePage' => 'billing', 'titlePage' => 'Billing'])
@section('content')
    <div class="content">
        @component('components.payment-method-create')
        @endcomponent
    </div>
@endsection