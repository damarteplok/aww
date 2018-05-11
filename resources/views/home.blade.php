@extends('layouts.app')

@section('content')

            <div class="card-columns">
              <div class="card border-info mb-3">
                <div class="card-header text-center">
                    saldo
                </div>
                <div class="card-body">
                  
                  <p class="card-text text-center">{{ $saldo }}</p>
                </div>
              </div>

              <div class="card border-danger mb-3">
                <div class="card-header text-center">
                    pengeluaran
                </div>
                <div class="card-body">
                  
                  <p class="card-text text-center">{{ $pengeluaran }}</p>
                </div>
              </div>

              <div class="card border-success mb-3">
                <div class="card-header text-center">
                    pemasukan 
                </div>
                <div class="card-body">
                  
                  <p class="card-text text-center">{{ $pemasukan }}</p>
                </div>
              </div>

              
              
            </div>

@endsection


