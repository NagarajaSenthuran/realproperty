@extends('layouts.adminlayout')
@section('pagetitle', 'Rooms')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <form method="POST" action="{!! route('rooms.room.destroy', $room->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rooms.room.index') }}" class="btn btn-primary" title="Show All Room">
                        <span class="fa fa-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rooms.room.create') }}" class="btn btn-success" title="Create New Room">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rooms.room.edit', $room->id ) }}" class="btn btn-primary" title="Edit Room">
                        <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Room" onclick="return confirm(&quot;Click Ok to delete Room.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span class="float-left">
                    <h2 style="color:#ff7f50;">
                        {{ isset($title) ? $title : 'Room' }}
                    </h2>
                </span>  
            </div>
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Room Name</dt>
                            <dd>{{ $room->room_name }}</dd>
                            <dt>Room Length</dt>
                            <dd>{{ $room->room_length }}</dd>
                            <dt>Room Width</dt>
                            <dd>{{ $room->room_width }}</dd>
                            <dt>Room Dimention Unit</dt>
                            <dd>{{ $room->room_dimention_unit }}</dd>
                            <dt>Room Dimention display</dt>
                            <dd>{{ $room->room_dimention_display }}</dd>
                            <dt>Room Area Unit</dt>
                            <dd>{{ $room->room_area_unit }}</dd>
                            <dt>Property Id</dt>
                            <dd>{{ $room->property_id }}</dd>

                        </dl>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection