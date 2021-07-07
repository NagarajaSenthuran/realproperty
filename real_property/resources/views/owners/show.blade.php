@extends('layouts.adminlayout')
@section('pagetitle', 'Property Owner')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <form method="POST" action="{!! route('owners.owner.destroy', $owner->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('owners.owner.index') }}" class="btn btn-primary" title="Show All Owner">
                        <span class="fa fa-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('owners.owner.create') }}" class="btn btn-success" title="Create New Owner">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('owners.owner.edit', $owner->id ) }}" class="btn btn-primary" title="Edit Owner">
                        <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Owner" onclick="return confirm(&quot;Click Ok to delete Owner.?&quot;)">
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
                        {{ isset($owner->name) ? $owner->name : 'Owner' }}
                    </h2>
                </span>  
            </div>
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <dl class="dl-horizontal">
                                <dt>Name</dt>
                                <dd>{{ $owner->name }}</dd>
                                <dt>Contact No</dt>
                                <dd>{{ $owner->contact_no }}</dd>
                                <dt>Email</dt>
                                <dd>{{ $owner->email }}</dd>
                                <dt>Adderss</dt>
                                <dd>{{ $owner->address }}</dd>
                            </dl>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection