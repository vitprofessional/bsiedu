@extends('backend.include')
@section('adminviewtitle') 
    semester
@endsection
@section('adminviewcontent') 
        <a href="{{route('semesterAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
       <table class="table table-striped text-center" id="table-1">
            <thead>
              <tr>
                <th class="text-center"> Serial No</th>
                <th>Department</th>
                <th>Subject</th>
                <th>Semister</th>
                <th>View</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($Datakey as $data)
                    <tr>
                        <td> {{ $data->id}} </td>
                        <td>{{ $data->department}}</td>
                        <td class="align-middle"> {{ $data->subject}} </td>
                        <td> {{ $data->semister}} </td> 
                        <td> <a data-fancybox data-type="iframe" href="{{asset('/')}}{{$data->avatar}}" target="_blank"><i data-feather="eye"></i></a> </td>
                        <td>
                            <a href="{{route('semestersRemove',[$data->id])}}" class=""><i data-feather="trash"></i></a>
                            <a href="{{route('semesterEdit',[$data->id])}}" class=""><i data-feather="edit"></i></a>
                        </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
@endsection