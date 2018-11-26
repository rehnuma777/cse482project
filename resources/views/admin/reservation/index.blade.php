@extends('layouts.app')

@section('title','Reservation')

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

            @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Reservations</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Time and date
                        </th>
                         <th>
                            Message
                        </th>
                        <th>
                            Status
                        </th>
                         <th>
                          Created at
                        </th>
                         <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                  @foreach($reservations as $key=>$reservation)
                  <tr>
                    <td>
                      {{$key +1}}
                    </td>
                    <td>{{ $reservation->name}}</td>
                    <td>{{ $reservation->phone}}</td>
                      <td>{{ $reservation->date_and_time}}</td>
                      <th>{{ $reservation->message}}</th>
                      <th>
                          @if($reservation->status == true)
                              <span class="label label-info">Confirmed</span>
                          @else
                              <span class="label label-danger">not Confirmed yet</span>
                          @endif

                      </th>


                    <td>{{ $reservation->created_at}}</td>

                    <td>
                        <a href="" class="btn btn-info btn sm"><i class="material-icons">mode_edit</i></a>
                      <form id="delete-form-{{$reservation->id}}" action="" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')

                      </form>
                      <button type="button" class="btn btn-danger btn sm" onclick="if(confirm('Are you sure?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$reservation->id}}').submit();
                      }
                      else{
                        event.preventDefault();


                      }"><i class="material-icons">delete</i></button></td>
                  </tr> 
                  @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection


@push('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 <script>
  $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
@endpush