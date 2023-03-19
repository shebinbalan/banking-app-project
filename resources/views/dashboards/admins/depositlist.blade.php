@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>DEPOSIT LIST</h4>
    </div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DATETIME</th>
      <th scope="col">TYPE</th>
      <th scope="col">AMOUNT</th>
    </tr>
  </thead>
  <tbody>
  @foreach($deposits as $deposit)
                    <tr>
                    <td></td>
                    <td>{{$deposit->created_at}}</td>
                    <td>{{$deposit->type}}</td>
                    <td>{{$deposit->amount}}</td>
                   
                    
                   
                    
                     </tr>
                    @endforeach
   
  </tbody>
</table>
</div>
</div>
@endsection
