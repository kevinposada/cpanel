@extends('layouts.main', ['activePage' => 'billing', 'titlePage' => 'Billing'])
@section('content')
    <div class="content">
        {{-- @component('components.payment-method-create', ['hola' => 'Hola mundo'])
        @endcomponent --}}
        {{-- <x-payment-method-create/> --}}
        @livewire('payment-method-create')
    </div>
@endsection