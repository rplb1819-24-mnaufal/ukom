@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat datang {{ Auth::user()->name }}!
                </div>
            </div>
            <div class="card" style="margin-top:25px;">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @can('IsAdmin')
                            anjay admin
                        @endcan
                        @can('IsWaiter')
                            anjay Waiter
                        @endcan
                        @can('IsCashier')
                            anjay Kasir
                        @endcan
                        @can('IsCustomer')
                            anjay Customer
                        @endcan
                        @can('IsGuest')
                            anjay ada rijal
                        @endcan
                        @can('IsOwner')
                            anjay Owner
                        @endcan
                </div>
            </div>
                <div class="row" style="margin-top:25px">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Referensi.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Referensi</h5>
                            <p class="card-text">Daftar referensi yang sudah di buat.</p>
                            <a href="#" class="btn btn-primary">Entri Referensi</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Order.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Order</h5>
                            <p class="card-text">Daftar Entri Order yang sudah di buat.</p>
                            <a href="#" class="btn btn-primary">Entri Order</a>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top:25px">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Transaksi.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Transaksi</h5>
                            <p class="card-text">Daftar data order yang telah selesai.</p>
                            <a href="#" class="btn btn-primary">Entri Transaksi</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri User.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri User</h5>
                            <p class="card-text">Daftar User yang terdaftar.</p>
                            <a href="#" class="btn btn-primary">Entri User</a>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
