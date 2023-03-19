@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>With Draw List</h4>
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
  @foreach($withdraws as $withdraw)
                    <tr>
                    <td></td>
                    <td>{{$withdraw->created_at}}</td>
                    <td>{{$withdraw->type}}</td>
                    <td>{{$withdraw->amount}}</td>
                   
                    
                   
                    
                     </tr>
                    @endforeach
   
  </tbody>
</table>
</div>
</div>
@endsection
