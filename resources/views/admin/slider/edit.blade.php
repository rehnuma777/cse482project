@extends('layouts.app')

@section('title','Slider')

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
                  <h4 class="card-title ">Add New Doctor</h4>
                 
                </div>
                <div class="card-content">
                  <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Name of the Doctor:</b></label>
                          <input type="text" class="form-control" name="name" value="{{ $slider->name }}">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Speciality of the Doctor:</b></label>
                          <input type="text" class="form-control" name="type" value="{{ $slider->type }}">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-10">
                        <label class="bmd-label-floating"><b>Image of the Doctor:</b></label><br>
                       <input type="file" name="image">
                      </div>
                      </div><br>
                      <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
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