@extends('layouts.app')


@section('title','Dashboard')

@push('css')

@endpush


@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <p class="card-category">Doctor Category</p>
                  <h3 class="card-title">{{ $servicesCount}}

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">info</i>
                    <a href="#pablo">Total categories</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">slideshow</i>
                  </div>
                  <p class="card-category">Sliders(Doctors)</p>
                  <h3 class="card-title">{{$sliderCount}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">date_range</i><a href="{{ route('slider.index') }}">Get More Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">contacts</i>
                  </div>
                  <p class="card-category">Appoinments</p>
                  <h3 class="card-title">{{$reservations->count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">error_outline</i> <a href="{{ route('reservation.index') }}">Get More Details</a>
                  </div>
                </div>
              </div>
            </div>



        </div>
      </div>

      @endsection

      



@push('scripts')

@endpush

