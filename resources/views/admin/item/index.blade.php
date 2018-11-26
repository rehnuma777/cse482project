@extends('layouts.app')

@section('title','Doctor')

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('item.create')}}" class="btn btn-primary">Add New Doctor</a>
            @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Doctors</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Doctor Name
                        </th>
                        <th>
                          Doctor Speciality
                        </th>
                        <th>
                          Doctor Image
                        </th>
                        <th>
                          Doctor Description
                        </th>
                        <th>
                          Doctor Appointment Time
                        </th>
                         <th>
                          Created At
                        </th>
                         <th>
                          Updated At
                        </th>
                         <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                  @foreach($items as $key=>$item)
                  <tr>
                    <td>
                      {{$key +1}}
                    </td>
                    <td>{{ $item->name}}</td>
                     <td>{{ $item->service->speciality}}</td>
                    <td><img src="{{asset('uploads/Doctors/'.$item->image)}}" class="card-group" style="height: 150px; 
                    width:220px;"></td>
                    <td>{{ $item->description}}</td>
                   
                    <td>{{ $item->appointment}}</td>
                   <td>{{ $item->created_at}}</td>
                    <td>{{ $item->updated_at}}</td>
                    <td><a href="{{route('item.edit',$item->id)}}" class="btn btn-info btn sm"><i class="material-icons">mode_edit</i></a>
                      <form id="delete-form-{{$item->id}}" action="{{route('item.destroy',$item->id)}}" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')

                      </form>
                      <button type="button" class="btn btn-danger btn sm" onclick="if(confirm('Are you sure?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$item ->id}}').submit();
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