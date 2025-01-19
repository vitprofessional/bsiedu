@extends('backend.include')
@section('adminviewtitle') 
    studentpage
@endsection
@section('adminviewcontent') 
        <a href="{{route('studentAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
       <table class="table table-striped text-center" id="table-1">
            <thead>
              <tr>
                <th class="text-center">Serial No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Avater</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody> 
                @foreach($Datakey as $data)
                    <tr>
                        <td> {{$data->id}}</td>
                        <td> {{$data->name}}</td>
                        <td class="align-middle"> {{$data->email}}</td>
                        <td> {{$data->phone_number}}</td>
                        <td><a data-fancybox data-type ="iframe"  href="{{asset('/').$data->avatar}}" target="_blank"><i data-feather="eye"></i></a></td>
                        <td>
                            <a href="{{route('studentEdite',[$data->id])}}" class=""><i data-feather="edit"></i></a>
                            <a href="{{route('studentRemove',[$data->id])}}" class=""><i data-feather="trash"></i></a>
                         </td>
                  </tr>
                @endforeach
            </tbody>
      </table>
@endsection