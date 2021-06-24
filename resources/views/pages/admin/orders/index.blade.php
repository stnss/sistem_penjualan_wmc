@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Order</h4>
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
                    <a href="{{ route('admin.orders.index') }}">{{ __('menu.list', ['type' => 'Order']), }}</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('menu.list', ['type' => 'Order']), }}</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Order</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Order</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->external_id }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('orders.edit', $order) }}"
                                                        data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('orders.destroy', $order) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">{{ __('message.not_found', ['type' => 'Order']) }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Order</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Order</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection

