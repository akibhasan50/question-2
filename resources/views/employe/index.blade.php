@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-10 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 ">
          
          <a href="{{url('/addemploye')}}" class="btn btn-sm btn-outline-info">Add Employe</a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>SN</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Depertment</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php
                  $i=0;
              @endphp
              @foreach ($employes as $employe)
                @php
                  $i++;
              @endphp
                   <tr>
                  <td><a href="#">{{$i}}</a></td>
                    <td>{{$employe->name}}</td>
                    <td>{{$employe->gender}}</td>
                    <td>{{$employe->depertment}}</td>
                    <td>{{$employe->city}}</td>
                   
                    <td>
                    <a href="{{url('/editemploye/'.$employe->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{url('/viewemploye/'.$employe->id)}}" class="btn btn-sm btn-info">Details</a>
                    <a href="{{url('/deletemploye/'.$employe->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
              @endforeach
           
              </tbody>
                 
            
            </table>
            
          </div>
           {{ $employes->links() }}
              
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection