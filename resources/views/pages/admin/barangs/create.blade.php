@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Barang</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.barangs.index') }}">{{ __('menu.list', ['type' => 'Barang']) }}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{ __('menu.tambah', ['type' => 'Barang']), }}</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                @livewire('barang.create-barang')
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endsection

@section('js')
@endsection

