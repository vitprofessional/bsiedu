@extends('backend.include')
@section('adminviewtitle') 
    sylabus
@endsection
@section('adminviewcontent') 
        <a href='{{route('sylabusAdd')}}' style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
            <table class="table table-striped text-center" id="table-1">
                        <thead>
                          <tr>
                            <th>Serial No </th>
                            <th>Department</th>
                            <th>Probidhan</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach($Datakey as $data)
                            <tr>
                            <td>
                              {{ $data->id }}
                            </td>
                            <td> {{$data-> department }} </td>
                            <td class="align-middle">
                              {{$data->probidhan}}  
                            </td>
                            <td>
                              <a data-fancybox data-type="iframe" href="{{ asset('/') }}{{ $data->avatar }}" target="_blank"> <i data-feather="eye"></i></a>
                            </td>
                            <td>
                               <a href="{{route('sylabusRemove',[$data->id])}}" class=""><i data-feather="trash"></i></a>
                                 <a href="{{route('sylabusEdit',[$data->id])}}"><i data-feather="edit"></i></i></a>
                            </td>
                          </tr>
                        @endforeach
                                           
                                 
                        </tbody>
                      </table>
@endsection