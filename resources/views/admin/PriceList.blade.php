@extends('layouts.master')

@section('title')
    Dashboard
@endsection



@section('content')


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Price List </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th><b>DATE</b></th>
                        <th><b>PREMIUM</b></th>
                        <th><b>SILVER</b></th>
                        <th><b>DIESEL</b></th>
                        
                    </tr>
                  
                     
                    </thead>
                    <tbody>
                          @foreach($prices as $row) 
                            <tr>
                              <td>P{{$row->date}}</td>
                              <td>P{{$row->premium_price}}</td>
                              <td>P{{$row->silver_price}}</td>
                              <td>P{{$row->diesel_price}}</td>
                            </tr>
                           
                          @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          

@endsection



@section('script')

@endsection

