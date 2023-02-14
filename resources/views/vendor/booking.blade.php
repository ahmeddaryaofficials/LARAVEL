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
                            <th>generate</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $item)
                            <input type="text" class="booking" id="{{ $item->id }}" value="{{ $item->id }}"
                                style="display:none">
                            <td class="book_id">{{ $item->id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                                Confirm
                            </td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    bill now
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form action="/generate-pdf" method="get">

@csrf
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">bill</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                                <input style="display:none" value="{{ $item->id }}" name="book_id" type="text" class="form-control">
                                                            <input style="display:none" value="{{ $item->user_id }}" name="user" type="text" class="form-control">
                                                            <input style="display:none" value="{{ $item->ven_id }}" name="vendor" type="text" class="form-control">
                                                            <input style="display:none" value="{{ $item->date }}" name="date" type="text" class="form-control">


                                                <div class="modal-body">
                                                    <div class="col-md-6 mb-3 ">
                                                        <label class="form-label">Price decide:</label>
                                                        <div class="input-group input-group-outline">

                                                            <input name="price" type="text" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 mb-3 ">
                                                        <label class="form-label">No of guest</label>
                                                        <div class="input-group input-group-outline">

                                                            <input name="guest" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">generate bill</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                    </tbody>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
