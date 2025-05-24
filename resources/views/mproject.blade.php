@extend('master')
@section('title', 'master court')
@section('content - title', 'master courts')
@section('content')
<div class="col-md-8">
    <a class"btn
<table class="table">
    <th>
        <td>no. </td>
        <td>court name </td>
        <td>court type </td>
        <td>action </td>
    </th>
@forelse($courts as $court)
@empty
@endforelse
<tr>
    <td>{{$court->type->name}} </td>
    <td>{{$court->name}} </td>
    <td> {{$loop->iteration}}</td>
    <td>
        <a class="btn btn-sm btn-warning" href="">edit</a>
        <a class="btn btn-sm btn-danger" href="">delete</a> 
    </td>
</tr>
@empty
<div class="alert alert-danger">
    belum ada data
    <div>
@endempty

</table>
</div>

<div class="col-md-4">

</div>
@endsection