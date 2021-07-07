@extends('layouts.adminlayout')
@section('pagetitle', 'Property Owner')
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
                        <span class="fa fa-ok"></span>
                        {!! session('success_message') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    @endif
                </div>
                <div class="float-right">
                    <div class="btn-group btn-group-sm pull-right" role="group">
                        <a href="{{ route('owners.owner.create') }}" class="btn btn-success" title="Create New Owner">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="panel panel-default">
                    @if(count($owners) == 0)
                    <div class="panel-body text-center">
                        <h4>No Owners Available.</h4>
                    </div>
                    @else

                    <div class="panel-body panel-body-with-table">
                        <div class="table-responsive">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Address</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($owners as $owner)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $owner->name }}</td>
                                        <td>{{ $owner->contact_no }}</td>
                                        <td>{{ $owner->email }}</td>
                                        <td>{{ $owner->address }}</td>

                                        <td>

                                            <form method="POST"
                                                action="{!! route('owners.owner.destroy', $owner->id) !!}"
                                                accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <a href="{{ route('owners.owner.show', $owner->id ) }}"
                                                        class="btn btn-info" title="Show Owner">
                                                        <span class="fa fa-list-ul" aria-hidden="true"></span>
                                                    </a>
                                                    <a href="{{ route('owners.owner.edit', $owner->id ) }}"
                                                        class="btn btn-primary" title="Edit Owner">
                                                        <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                                                    </a>

                                                    <button type="submit" class="btn btn-danger" title="Delete Owner"
                                                        onclick="return confirm(&quot;Click Ok to delete Owner.&quot;)">
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
                        {!! $owners->render("pagination::bootstrap-4") !!}
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection