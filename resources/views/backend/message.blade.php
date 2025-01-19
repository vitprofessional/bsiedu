@extends('backend.include')
@section('adminviewtitle') 
    Text message
@endsection
@section('adminviewcontent') 
       <table class="table table-striped  text-center " id="table-1">
            <thead>
              <tr>
                <th>Slno</th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Subject </th>
                <th> Message </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach($Datakey as $data)
                    <tr>
                        <td> {{ $data-> id}} </td>
                        <td>{{ $data-> name}}</td>
                        <td class="align-middle"> {{ $data-> email }} </td>
                        <td>{{ $data-> phone}}</td>
                        <td>{{ $data-> subject}}</td>
                        <td>{{ $data-> message}}</td>
                         <form  method='post'>
                             @csrf
                             <td><a href="{{route('messagetRemove',[$data->id])}}" class=''><i data-feather="trash"></i></a></td>
                         </form>   
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection