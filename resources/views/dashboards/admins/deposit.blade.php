@extends('dashboards.admins.layouts.admin-dash-layouts')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Deposit Money</h4>
    </div>
<div class="card-body">
    <form action="{{url('insert-deposits')}}" method="POST">
        @csrf
        <div class="row">
           
            <div class="col-md-12 mb-6">
                <label for="">Amount</label>
                <input type="text" class="form-control" name="amount">
            </div>
            <div class="col-md-12 mb-6">
           
         <input type="hidden" id="type" name="type" value="CREDIT" />
            </div>
            
   
  </div>
            <div class="col-md-8 mb-4">
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
