@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('proparties.proparty.index') }}" class="btn btn-primary"
                    title="Show All Proparties">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
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
                    <h2 class="m-0 font-weight-bold text-center" style="color:#ff7f50;">Create New Proparty</h2>
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

                            <form method="POST" action="{{ route('proparties.proparty.store') }}" accept-charset="UTF-8" id="create_proparty_form" name="create_proparty_form" class="form-horizontal">
                            {{ csrf_field() }}
                            @include ('proparties.createform', [
                                                        'proparty' => null,
                                                    ])

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-org" type="submit" value="Add">
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