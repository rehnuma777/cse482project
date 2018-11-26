@extends('layouts.app')

@section('title','Doctor Category')

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('services.create')}}" class="btn btn-primary">Add New Category</a>
            @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Doctor Categories</h4>
                 
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
                          Speciality
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
                  @foreach($services as $key=>$services)
                  <tr>
                    <td>
                      {{$key +1}}
                    </td>
                    <td>{{ $services->name}}</td>
                    <td>{{ $services->speciality}}</td>
                   <td>{{ $services->created_at}}</td>
                    <td>{{ $services->updated_at}}</td>
                    <td><a href="{{route('services.edit',$services->id)}}" class="btn btn-info btn sm"><i class="material-icons">mode_edit</i></a>
                      <form id="delete-form-{{$services->id}}" action="{{route('services.destroy',$services->id)}}" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')

                      </form>
                      <button type="button" class="btn btn-danger btn sm" onclick="if(confirm('Are you sure?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$services ->id}}').submit();
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