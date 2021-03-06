@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    
    <div class="row justify-content-center">
      <div class="col-lg-10 my-5">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="m-0 font-weight-bold text-primary text-center">Edit Employe Details</h2>
              <a href="{{url('/')}}" class="btn btn-sm btn-outline-info">All Employe</a>

            </div>
            <div class="card-body">
            <form method="POST" action="{{url('/updateemploye',$singleemploye->id)}}">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" 
                    value="{{$singleemploye->name}}">
                  @error('name')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Gender</p>
                     <label class="radio-inline ">
                      <input  type="radio" name="gender" @if ($singleemploye->gender == 'male') checked @endif value="male">Male
                      <input  type="radio" name="gender" @if ($singleemploye->gender == 'female') checked @endif value="female">Female
                    </label>

                     
                </div>
                  @error('gender')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
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
              
                   @error('depertment')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
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

                    @error('city')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                  </select>
                </div>
                
               
               
               

                <button type="submit" class="btn btn-primary">Udate</button>
              </form>
            </div>
          </div>
        
    </div>
    </div>
    <!--Row-->

   

  </div>
@endsection