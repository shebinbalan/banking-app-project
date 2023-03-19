@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4>Welcome  {{ Auth::user()->name }}</h4>
    </div>
<div class="card-body">
<table class="table">
@php
$total =0; 
 @endphp
    <tbody>
              <tr>
        <td>Your ID</td>
        <td>{{ Auth::user()->email }}</td>            
        </tr>
        <tr>
        <td>Current Balance</td>
        
        <td>@foreach( $deposits as $deposit )
        @php $total +=$deposit->amount;  
           
        @endphp
      
        @endforeach 
        @foreach( $withdraws as $withdraw )
        @php   
             $total -=$withdraw->amount;
        @endphp
      
        @endforeach

        @foreach( $transfermoney as $transfer )
        @php   
             $total -=$transfer->amount;
        @endphp
      
        @endforeach
        
        
        {{$total}}  </td>  
               
        </tr>        
    </tbody>
  </table>
</div>
</div>
@endsection



