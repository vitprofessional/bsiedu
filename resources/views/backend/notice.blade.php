@extends('backend.include')
@section('adminviewtitle') 
    Noticepage
@endsection
@section('adminviewcontent') 
        <a href="{{route('addNotice')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
        <table class="table table-striped text-center" id="table-1">
            <thead>
                <tr>
                    <th> Serial No</th>
                    <th>Notice Title</th>
                    <th>Status</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Datakey as $data)
                    <tr>
                        <td>{{ $data->id }} </td>
                        <td> {{$data->title}} </td>
                        <td class="align-middle"> {{$data->status}}</td>
                        <td> <a data-fancybox data-type="iframe" href="{{ asset('/') }}{{ $data->avatar }}" target="blank"> <i data-feather="eye"></i></a> </td>
                        <td>
                            <a href="{{route('removeNotice',[$data->id])}}" ><i data-feather="trash"></i></a>
                            <a href="{{route('noticeEdite',[$data->id])}}" ><i data-feather="edit"></i></a>
                        </td>
                    </tr>
                @endforeach
           </tbody>
      </table>
@endsection