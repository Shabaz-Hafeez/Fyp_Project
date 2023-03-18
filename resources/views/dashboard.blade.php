{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{-- Hi.....{{Auth::user()->name}} --}}
        {{-- </h2>
    </x-slot> --}}

 {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>

            </div>
        </div> --}}
    {{-- </div> --}} 
{{-- </x-app-layout> --}} 

@extends('layouts.master')

@section('content')
   {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div> --}}

<div class="container-fluid">
    <div class="layout-specing">
        <h5 class="mb-2">Dashboard</h5>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sales</h5>
          <h6 class="card-subtitle mb-2 text-muted">Last 30 days</h6>
          <p class="card-text">$10,000</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Visitors</h5>
          <h6 class="card-subtitle mb-2 text-muted">Last 30 days</h6>
          <p class="card-text">5,000</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          <h6 class="card-subtitle mb-2 text-muted">Last 30 days</h6>
          <p class="card-text">200</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customers</h5>
          <h6 class="card-subtitle mb-2 text-muted">Total</h6>
          <p class="card-text">1,000</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
@endsection
