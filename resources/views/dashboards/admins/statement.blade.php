@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Statements</h4>
    </div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DATETIME</th>
      <th scope="col">DEPOSIT AMOUNT</th>
      <th scope="col">TYPE</th>
      <th scope="col">EMAIL</th>
      <th scope="col">BALANCE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($statements as $statement)
                    <tr>
                    <td>1</td>
                    <td>{{$statement->created_at}}</td>
                    <td>{{$statement->amount}}</td>
                    <td>{{$statement->type}}</td>
                    <td>{{$statement->email}}</td>
                    <td></td>
                    
                     </tr>
                    @endforeach
   
  </tbody>
</table>
</div>
</div>
@endsection
