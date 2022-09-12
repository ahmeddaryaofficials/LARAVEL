@extends('layouts.admin')

@section('content')
<div class='card'>
    <div class="header">
        <h3>Categories</h3>
    </div>


<div class="card-body">
    <table style="justify-content: center" class="table">
        <thead>
            <tr class="table-primary">
                <th>Image</th>
                <th>Id</th>
                <th>Vendor Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item )
            <td><img src="{{asset('assets/uploads/Category/'.$item->image)}}" class="cate-image" alt="image here"></td> 
               

               <td>{{ $item->id }}</td> 
               <td>{{ $item->name }}</td> 
               <td>{{ $item->description }}</td> 
               <td>
                <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary" c>edit</a>
                <a href="{{url('delete_Category/'.$item->id)}}" class="btn btn-danger">delete</a>
               </td>
        </tbody>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection