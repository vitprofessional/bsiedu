@extends('frontside.include')
@section('backtitle') Information @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}

</style>

 <section style="margin-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   @if(!empty($Datakey))
                   <div class="card-header">{{ $title }}</div>
                   <div class="card-body">
                      <table id="myTable" class="display border" >
                        <thead>
                            <tr>
                                <th>Title </th>
                                <th> File </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Datakey as $data)
                            <tr>
                                <td>{{ $title }}</td>
                                <td><a data-fancybox data-type="iframe" href="/storage/app/public/frontend/uploads/box/content/{{ $data->avatar }}" target="_blank"> <i class="fa fa-eye" style="color: green;"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                     </table>                        
                   </div>
                   @else
                   <div class="alert alert-info">Sorry! No data found</div>
                   @endif
               </div>
           </div>
        </div>
    </div>
</section>

   


@endsection