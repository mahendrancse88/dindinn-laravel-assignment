@extends('template.masterLayout')
@section('content')
<h1>Client send feedback to vendor</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form action="{{route('feedbacks.sendfeedBack')}}" method="post" style="margin-top:45px">
  @csrf
  <div class="form-group">
   
    <select class="form-control" name="client_id">
     <option value="">Select Client Name</option>
      @foreach ($clients as $client)
      <option value="{{$client->id}}">{{$client->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="vendor_id">
    <option value="">Select Vendor Name</option>
      @foreach ($vendors as $vendor)
      <option value="{{$vendor->id}}">{{$vendor->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Feedback</label>
    <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Send</button>
</form>
@endsection