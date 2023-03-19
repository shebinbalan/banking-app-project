@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Money Transfer List</h4>
    </div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DATETIME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">AMOUNT</th>
    </tr>
  </thead>
  <tbody>
  @foreach($transfermoneys as $transfermoney)
                    <tr>
                    <td></td>
                    <td>{{$transfermoney->created_at}}</td>
                    <td>{{$transfermoney->email}}</td>
                    <td>{{$transfermoney->amount}}</td>
                   
                    
                   
                    
                     </tr>
                    @endforeach
   
  </tbody>
</table>
</div>
</div>
@endsection
