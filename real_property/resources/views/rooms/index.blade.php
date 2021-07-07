@extends('layouts.adminlayout')
@section('pagetitle', 'Rooms')
@section('content')

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-xl-11 col-lg-11 col-sm-11">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <span class="glyphicon glyphicon-ok"></span>
                        {!! session('success_message') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                @endif
                </div>
                <div class="float-right">
                    <div class="btn-group btn-group-sm pull-right" role="group">
                        <a href="{{ route('rooms.room.create') }}" class="btn btn-success" title="Create New Room">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="panel panel-default">
                    @if(count($rooms) == 0)
                        <div class="panel-body text-center">
                            <h4>No Rooms Available.</h4>
                        </div>
                    @else
                    <div class="panel-body panel-body-with-table">
                        <div class="table-responsive">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Room Name</th>
                                        <th>Room Length</th>
                                        <th>Room Width</th>
                                        <th>Room Dimention display</th>
                                        <th>Property Id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $room->room_name }}</td>
                                        <td>{{ $room->room_length }} {{ $room->room_dimention_unit }}</td>
                                        <td>{{ $room->room_width }} {{ $room->room_dimention_unit }}</td>
                                        <td>{{ $room->room_dimention_display }} {{ $room->room_area_unit }}</td>
                                        <td>{{ $room->property_id }}</td>

                                        <td>

                                            <form method="POST" action="{!! route('rooms.room.destroy', $room->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <a href="{{ route('rooms.room.show', $room->id ) }}" class="btn btn-info" title="Show Room">
                                                        <span class="fa fa-list-ul" aria-hidden="true"></span>
                                                    </a>
                                                    <a href="{{ route('rooms.room.edit', $room->id ) }}" class="btn btn-primary" title="Edit Room">
                                                        <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                                                    </a>

                                                    <button type="submit" class="btn btn-danger" title="Delete Room" onclick="return confirm(&quot;Click Ok to delete Room.&quot;)">
                                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                                    </button>
                                                </div>

                                            </form>

                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="panel-footer">
                        {!! $rooms->render("pagination::bootstrap-4") !!}
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection