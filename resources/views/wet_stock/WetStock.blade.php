@extends('layouts.wet')


@section('title')
    Dashboard
@endsection



@section('content')


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Wet Stock Reconciliation </h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#wet-stock-modal" >Add Values</button>
                @include('wet_stock.modal._wet-stock-modal') 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          

@endsection



@section('script')

@endsection

