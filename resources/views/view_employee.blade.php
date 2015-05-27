@extends('layouts.normal')

@section('main')
  <table class="table table-striped table-bordered table-font" border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $row)
      <tr>
        <td>{{$row->emp_id}}</td>
        <td>{{$row->emp_name}}</td>
      </tr>
      @endforeach    
    </tbody>
  </table>  
@endsection
