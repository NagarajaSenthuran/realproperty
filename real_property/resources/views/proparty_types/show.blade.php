@extends('layouts.adminlayout')
@section('pagetitle', 'Proparty Types')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
        <form method="POST" action="{!! route('proparty_types.proparty_type.destroy', $propartyType->type_id) !!}"
            accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('proparty_types.proparty_type.index') }}" class="btn btn-primary"
                    title="Show All Proparty Type">
                    <span class="fa fa-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparty_types.proparty_type.create') }}" class="btn btn-success"
                    title="Create New Proparty Type">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparty_types.proparty_type.edit', $propartyType->type_id ) }}" class="btn btn-primary"
                    title="Edit Proparty Type">
                    <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                </a>

                <button type="submit" class="btn btn-danger" title="Delete Proparty Type"
                    onclick="return confirm(&quot;Click Ok to delete Proparty Type.?&quot;)">
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
                        {{ isset($propartyType->type_name) ? $propartyType->type_name : 'Proparty Type' }}
                    </h2>
                </span>  
            </div>
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Proparty Type Name -> <span style="color:#ff7f50;">{{ $propartyType->type_name }}</span></h3>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection