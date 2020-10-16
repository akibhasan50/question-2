@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    
    <div class="row justify-content-center">
      <div class="col-lg-10 my-5">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="m-0 font-weight-bold text-primary text-center">Employe Details</h2>
              <a href="{{url('/')}}" class="btn btn-sm btn-outline-info">All Employe</a>

            </div>
            <div class="card-body">
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" 
                    value="{{$singleemploye->name}}">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" 
                    value="{{$singleemploye->gender}}">
                 
                </div>
               
              
                <div class="form-group">
                  <label for="">Depertment</label>
                  <select class="form-control"  name="depertment" id="depertment">
                    <option>select depertment</option>
                    @foreach ($depertments as $depertment)
                        <option
                         @if ($depertment->name == $singleemploye->depertment)
                        selected
                    @endif
                        
                        >{{$depertment->name}}</option>
                    @endforeach
                  
                  </select>
              
                   
                </div>
                <div class="form-group">
                  <label for="">City</label>
                  <select class="form-control" name="city" id="">
                    <option>select city</option>
                      @foreach ($cities as $city)
                        <option
                           @if ($city->name == $singleemploye->city)
                        selected
                         @endif
                        
                        >{{$city->name}}</option>
                    @endforeach

                  </select>
                </div>
       
              
            </div>
          </div>
        
    </div>
    </div>
    <!--Row-->

   

  </div>
@endsection