@extends('backend.include')
@section('adminviewtitle') 
    Homepage
@endsection
@section('adminviewcontent') 
       <a href="{{route('examrotineAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
       <table class="table table-striped text-center" id="table-1">
            <thead>
                  <tr>
                    <th class="text-center"> Serial No</th>
                    <th>Exam Name</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Avatar</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                @foreach($Datakey as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{$data->exam}} </td>
                        <td> {{ $data-> department }} </td>
                        <td> {{$data->semister}} </td>
                        <td> {{$data->status}} </td>                        
                        <td> <a data-fancybox data-type="iframe" href="{{asset('/')}}{{$data->avatar}}" target="_blank" ><i data-feather="eye"></i></a> </td>
                        <td>
                             <a href="{{route('examRemove',[$data->id])}}" class=""><i data-feather="trash"></i></a>
                             <a href="{{route('examEdit',[$data->id])}}" class=""><i data-feather="edit"></i></a>
                        </td>
                    </tr>
                 @endforeach
           </tbody>
        </table>
@endsection