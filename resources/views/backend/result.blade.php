@extends('backend.include')
@section('adminviewtitle') 
    Homepage
@endsection
@section('adminviewcontent') 
        <a href="{{route('resultAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
       <table class="table table-striped text-center" id="table-1">
            <thead>
              <tr>
                 <th class="text-center">Serial No</th>
                 <th>Department</th>
                 <th>Semester</th>
                 <th>Shift</th>
                 <th>View</th>
                 <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($Datakey as $data)
                    <tr>
                        <td> {{$data->id}} </td>
                        <td> {{$data->departmetn}}</td>
                        <td class="align-middle"> {{$data->semester}}</td>
                        <td>{{$data->shift}}</td>
                        <td> <a data-fancybox data-type="iframe" href="{{asset('/')}}{{$data->image}}" target="_blank" ><i data-feather="eye"></i></a> </td>
                        <td>
                            <a href="{{route('resultRemove',[$data->id])}}" class=""><i data-feather="trash"></i></a>
                            <a href="{{route('rsultEdit',[$data->id])}}" class=""><i data-feather="edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection