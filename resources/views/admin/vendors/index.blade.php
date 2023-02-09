@extends('layouts.admin')

@section('content')
<div class='card'>
    <div class="header">
        <h3>Vendors</h3>
    </div>


<div class="card-body">
    <div class="table-responsive">
    <table style="justify-content: center" class="table">
        <thead>
            <tr class="table-primary">
                <th>Image</th>
                <th>vendor Id</th>
                <th>Vendor Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendors as $item )
            <td><img src="{{asset('assets/uploads/vendors/'.$item->image)}}"height="50%" width="50%" class="cate-image" alt="image here"></td>


               <td>{{ $item->id }}</td>
               <td>{{ $item->vendor_name }}</td>
               <td>{{ $item->selling_price }}</td>
               <td>
                <a href="{{url('edit_vendors/'.$item->id)}}" class="btn btn-primary" c>edit</a>
                <a href="{{url('delete_vendors/'.$item->id)}}" class="btn btn-danger">delete</a>
               </td>
        </tbody>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
