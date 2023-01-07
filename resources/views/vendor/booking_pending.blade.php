@extends('vendorlayouts.vendor')

@section('content')
<div class='card'>
<div class="card-header">
    <h3>booking Request</h3>
</div>

<div class="card-body">

        <table style="justify-content: center" class="table">
            <thead>
                <tr class="table-primary">
                    <th>Booking id</th>
                    <th>Customer Id</th>
                    <th>booking date</th>
                    <th>availibility</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $item )
                   <input type="text" class="booking" id="{{ $item->id }}" value="{{ $item->id }}" style="display:none">
                   <td class="book_id">{{ $item->id }}</td>
                   <td>{{ $item->user_id }}</td>
                   <td>{{ $item->date }}</td>
                   <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle custom-button_{{$item->id}}"  type="button"  @if ($item->booking_availibility ==0)
                            aria-haspopup="true"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                        @endif  aria-expanded="false" >
                         @if ($item->booking_availibility ==0)
                             not confirmed
                         @else
                         confirmed
                         @endif
                        </button>
                        <div class="dropdown-menu"   aria-labelledby="dropdownMenuButton">
                            @if ($item->booking_availibility ==0)
                            <a class="dropdown-item custom-confirmed" href="#" onclick="change_availibility({{ $item->id }})">Confirm booking</a>
                            @endif
                        </div>
                      </div>
                   </td>
            </tbody>
                @endforeach
            </tbody>
        </table>

</div>

</div>
<script>
function change_availibility(booking_id)
{
console.log(booking_id)
$.ajax({
      url: "/change_availibility", //Define Post URL
      type:"POST",
      data:{
    "_token":$('meta[name="csrf-token"]').attr('content'),
    "booking_id":booking_id,
      },
     success:function(response){
        if(response.status == 200){
       $('.custom-button_'+booking_id).html('confirmed')
        }
     }
    });
}
</script>
@endsection
