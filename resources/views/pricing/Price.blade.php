@extends('layouts.pricing')


@section('title')
    Dashboard
@endsection



@section('content')


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> PRICING </h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#price-modal" >Add Price</button>
                @include('pricing.modal._price-modal') 
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

