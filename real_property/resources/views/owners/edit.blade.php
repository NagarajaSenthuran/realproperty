@extends('layouts.adminlayout')
@section('pagetitle', 'Property Owner')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('owners.owner.index') }}" class="btn btn-primary" title="Show All Owner">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('owners.owner.create') }}" class="btn btn-success" title="Create New Owner">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-xl-11 col-lg-11">
                    <span class="pull-left">
                        <h2 style="color:#ff7f50;">
                            {{ !empty($owner->name) ? $owner->name : 'Owner' }}
                        </h2>
                    </span>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ route('owners.owner.update', $owner->id) }}" id="edit_owner_form" name="edit_owner_form" accept-charset="UTF-8" class="form-horizontal">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">
                            @include ('owners.form', [
                                                        'owner' => $owner,
                                                    ])

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-org" type="submit" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection