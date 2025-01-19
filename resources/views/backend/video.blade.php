@extends('backend.include')
@section('adminviewtitle') 
    photo List
@endsection
<style>
    
    .ytp-cued-thumbnail-overlay-image{
        width:300px; !importent
    }
</style>
@section('adminviewcontent') 
        <a href=" {{route('videoAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
       <table class="table table-striped text-center" id="table-1">
            <thead>
              <tr>
                <th class="text-center"> Serial No </th>
                <th>Title</th>
                <th>Details</th>
                <th>Media</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach($Datakey as $data)
                 <tr>
                    <td> {{ $data->id}} </td>
                    <td> {{ $data->title}}</td>
                    <td> {{ $data->details}} </td>
                    <td> <a data-fancybox data-type="iframe"  style="width:300px;"  href="{{$data->location}}" target= style="widht:300px;" "_blank"><i data-feather="eye"></i></a> </td>
                    <td>
                        <a href="{{route('videoRemove',[$data->id])}}" ><i data-feather="trash"></i></a>
                        <a href="{{route('videoEdit',[$data->id])}}"><i data-feather="edit"></i></a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
         </table>
@endsection