@extends('layouts.app')

@section('title','Services')

@push('css')
@endpush

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Doctor Information</h4>
                 
                </div>
                <div class="card-content">
                  <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Name of the Doctor:</b></label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Speciality of the Doctor:</b></label>
                          <select class="form-control" name="services">
                            @foreach($services as $services)
                            <option value="{{$services->id}}">
                              {{$services->speciality}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Doctor Description:</b></label>
                          <textarea name="description" class="form-control"></textarea>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Appointment Time/Day:</b></label>
                          <input type="text" class="form-control" name="appointment">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-10">
                        
                          <label class="bmd-label-floating"><b>Doctor Photo:</b></label>
                          <input type="file" name="image">
                        
                      </div>
                      </div>
                      </div>
                      </div>
                      <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection


@push('scripts')

@endpush