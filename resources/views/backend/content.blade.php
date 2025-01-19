@extends('backend.include')
@section('adminviewtitle') 
    contentpage
@endsection
@section('adminviewcontent') 
    <a href="{{route('contentAdd')}}" style="hover:#fff;" class='btn btn-danger mb-2'>Add New</a>
    <table class="table table-striped text-center" id="table-1">
        <thead>
          <tr>
            <th class="text-center"> Serial name </th>
            <th>Page Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
             @foreach($Datakey as $data)
             <tr>
                <td> {{ $data->id }}</td>
                <td>{{ $data->page_name}}</td>
                <td>
                    <a href="{{route('contentEdit',[$data->id])}}" ><i data-feather="edit"></i></a>
                    <a href="{{route('contentRemove',[$data->id])}}" ><i data-feather="trash"></i></a>
                </td>
              </tr> 
            @endforeach
        </tbody>
    </table>
@endsection