@extends('layouts.master')

@section('title')
    Dashboard
@endsection



@section('content')


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Daily Sales Records </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th><b>DATE</b></th>
                        <th><b>PRODUCT</b></th>
                        <th><b>NO. OF LITERS</b></th>
                        <th><b>PRICE</b></th>
                        <th><b>TOTAL SALES</b></th>
                    </tr>
                  
                     
                    </thead>
                    <tbody>
                          <tr>
                          @foreach($daily_sales as $row)                          
                            
                              <td>{{$row->date}}</td>
                              <td>{{$row->product}}</td>
                              <td>{{$row->num_of_liters_sold}}</td>
                           @endforeach   
                            
                          @foreach($prices as $row1)
                              <td>P{{$row1->product_price}}</td>
                              
                             
                          @endforeach 
                          
                          </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          

@endsection



@section('script')

@endsection

