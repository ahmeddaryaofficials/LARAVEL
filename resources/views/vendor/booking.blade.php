@extends('vendorlayouts.vendor')

@section('content')
<div class='card'>
<div class="card-header">
    <h3>booking</h3>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table style="justify-content: center" class="table">
            <thead>
                <tr class="table-primary">
                    <th>Booking id</th>
                    <th>Customer Id</th>
                    <th>booking date</th>
                    <th>booking status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $item )
                   <input type="text" class="booking" id="{{ $item->id }}" value="{{ $item->id }}" style="display:none">
                   <td class="book_id">{{ $item->id }}</td>
                   <td>{{ $item->user_id }}</td>
                   <td>{{ $item->date }}</td>
                   <td>
                    Confirm
                   </td>
            </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>


@endsection
