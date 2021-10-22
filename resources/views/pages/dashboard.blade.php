@extends('layouts.app')
@section('content')
@if(Session::has('admin'))
<center><h3>Welcome Admin</h3></center>
<h3 >UserID: {{Session()->get('adminId')}}</h3><hr>
<h3>Name: {{$admin->name}}</h3><hr>
<h3>Email: {{$admin->email}}</h3><hr>
<h3>Username: {{Session()->get('admin')}}</h3><hr>
<h3>Phone: {{$admin->phone}}</h3><hr>
<h3>Date Of Birth: {{$admin->dob}}</h3><hr>
<h3>Gender: {{$admin->gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('editAdminInfo')}}"> Update </a> 
@endif
@if(Session::has('manager'))
<center><h3>Welcome Manager</h3></center>
<br>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">UserID: {{$manager->id}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Name: {{$manager->name}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Email: {{$manager->email}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Username: {{Session()->get('manager')}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Gender: {{$manager->gender}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Phone: {{$manager->phone}}</h4>
<h4 class="d-flex justify-content-center align-items-center bg-success p-2 m-2 text-dark bg-opacity-25">Date Of Birth: {{$manager->dob}}</h4>

<center><a class="btn btn-warning" href="{{route('editManagerInfo')}}"> Update </a> </center>
@endif
@endsection