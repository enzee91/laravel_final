@extends('layouts.master')

@section('title')
    Dashboard
@endsection



@section('content')


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Wet Stock Monitoring Records </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th><b>DATE</b></th>
                        <th><b>GROSS SALES</b></th>
                        <th><b>OPNG INVTY</b></th>
                        <th><b>PURCHASE DEL</b></th>
                        <th><b>CLSNG INVTY</b></th>
                        <th><b>DIPSTK RDG</b></th>
                        <th><b>ACT INVTY</b></th>
                        <th><b>DLY VAR</b></th>
                        <th><b>%VAR</b></th>
                        <th><b>MULATIVE VAR</b></th>
                    </tr>
                  
                     
                    </thead>
                    <tbody>
                          @foreach($wet_stocks as $row) 
                            <tr>
                              <td>{{$row->date}}</td>
                              <td>{{$row->gross_sales}}</td>
                              <td>{{$row->opng_invty}}</td>
                              <td>{{$row->purchase_del}}</td>
                              <td>{{$row->closing_inventory }}</td>
                              <td>{{$row->dipstk_rdg}}</td>
                              <td>{{$row->act_invty}}</td>
                              <td>{{$row->daily_var}}</td>
                              <td>{{$row->percent_var}}</td>
                              <td>{{$row->mulative_var}}</td>
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

