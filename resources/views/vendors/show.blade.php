@extends('template.masterLayout')
@section('content')
<h1>Vendor</h1>
<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Feedback</th>
      <th scope="col">Client</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($feedbacks as $feedback)
    <tr>
      <th scope="row">{{$feedback->id}}</th>
      <td>{{$feedback->feedback}}</td>
      <td>{{$feedback->client->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection