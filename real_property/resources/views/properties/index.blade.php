@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
@section('content')

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                selling properties</div>
                            <div class="h5 mb-0 font-weight-big text-gray-800">{{ $sale_properties }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Rental Proparties</div>
                            <div class="h5 mb-0 font-weight-big text-gray-800">{{ $rent_properties }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Sold Proparties</div>
                            <div class="h5 mb-0 mr-3 font-weight-big text-gray-800">{{ $sold_properties }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Let Proparties</div>
                            <div class="h5 mb-0 font-weight-big text-gray-800">{{ $let_properties }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

    <div class="row">
        <div class="col-sm-12">
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

        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    {{--<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>--}}
                    <div class="col-xl-12 col-lg-12 col-sm-12">

                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="let">
                                <button type="submit" class="btn btn-sm btn-org" title="search uncomplete property">let</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="sold">
                                <button type="submit" class="btn btn-sm btn-warning" title="search uncomplete property">sold</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="unpublish">
                                <button type="submit" class="btn btn-sm btn-dark" title="search uncomplete property">unpublish</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="uncomplete">
                                <button type="submit" class="btn btn-sm btn-danger" title="search uncomplete property">uncomplete</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="for shared">
                                <button type="submit" class="btn btn-sm btn-info" title="search uncomplete property">shared</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="for let">
                                <button type="submit" class="btn btn-sm btn-secondary" title="search uncomplete property">rental</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <form action="{{ route('properties.property.uncompletesearch') }}">
                                <input type="hidden" name="search_pro" value="for sale">
                                <button type="submit" class="btn btn-sm btn-primary" title="search uncomplete property">sale</button>
                            </form>
                        </div>
                    </div>
                    <div class="float-right p-2">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <a href="{{ route('properties.property.create') }}" class="btn btn-success"
                                title="Create New Proparty">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="panel panel-default">
                        @if(count($properties) == 0)
                            <div class="panel-body text-center">
                                <h4>No Properties Available.</h4>
                            </div>
                        @else
                        <div class="panel-body panel-body-with-table">
                            <div class="table-responsive">

                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Catagery</th>
                                            {{--<th>Property Type</th>
                                            <th>Age</th>
                                            <th>Minimum Term</th>
                                            <th>Door No</th>
                                            <th>Door Name</th>
                                            <th>First Postcode</th>
                                            <th>Second Postcode</th>
                                            <th>Street Name</th>
                                            <th>Second Line of Address</th>
                                            <th>Post Town</th>
                                            <th>Post City</th>
                                            <th>Post Country</th>--}}
                                            <th>Display Address Line1</th>
                                            <th>Display Address Line2</th>
                                            {{--<th>Display Address</th>
                                            <th>Condition of Property</th>
                                            <th>Condition Furnished</th>
                                            <th>Access type</th>
                                            <th>Heating Type</th>
                                            <th>Bill</th>
                                            <th>Burglar Alarm</th>
                                            <th>CCTV</th>
                                            <th>Swimming Pool</th>
                                            <th>Property Enquiry Contact No</th>
                                            <th>Property Enquiry Email</th>
                                            <th>Sale Condition</th>
                                            <th>Rent Condition</th>
                                            <th>Bedrooms</th>
                                            <th>Bathrooms</th>
                                            <th>Halls</th>
                                            <th>Reseptions</th>
                                            <th>Floors</th>--}}
                                            {{--<th>Parking</th>
                                            <th>Garden</th>
                                            <th>Internal Area</th>
                                            <th>Land Area</th>
                                            <th>Area Unit</th>--}}
                                            <th>Sale Price</th>
                                            <th>Let Amont</th>
                                            {{--<th>Price Flag</th>
                                            <th>Rent Frequency</th>
                                            <th>Deposite Minimum</th>
                                            <th>Deposite Flag</th>
                                            <th>Admin Fee Maxmimum</th>
                                            <th>Admin Fee Exemption</th>
                                            <th>Admin Fee Flag</th>
                                            <th>date Intake</th>
                                            <th>date Published</th>
                                            <th>date Revoked</th>
                                            <th>Further Details</th>
                                            <th>Property Details</th>
                                            <th>Property Details Display</th>--}}
                                            <th>Owner</th>
                                            <th>Complete?</th>
                                            <th>Publish?</th>
                                            <th>Sold?</th>
                                            <th>Let?</th>
                                            <th></th>
                                            <th>Room</th>
                                            <th>Owner</th>
                                            <th>Images</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $property->catagery }}</td>
                                            {{--<td>{{ optional($property->propertytype)->type_name }}</td>
                                            <td>{{ $property->age }}</td>
                                            <td>{{ $property->minimum_term }}</td>
                                            <td>{{ $property->door_no }}</td>
                                            <td>{{ $property->door_name }}</td>
                                            <td>{{ $property->first_postcode }}</td>
                                            <td>{{ $property->second_postcode }}</td>
                                            <td>{{ $property->street_name }}</td>
                                            <td>{{ $property->second_line_of_address }}</td>
                                            <td>{{ $property->post_town }}</td>
                                            <td>{{ $property->post_city }}</td>
                                            <td>{{ $property->post_country }}</td>--}}
                                            <td>{{ $property->display_address_line1 }}</td>
                                            <td>{{ $property->display_address_line2 }}</td>
                                            {{--<td>{{ ($property->display_address) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $property->condition_of_property }}</td>
                                            <td>{{ $property->condition_furnished }}</td>
                                            <td>{{ $property->access_type }}</td>
                                            <td>{{ $property->heating_type }}</td>
                                            <td>{{ $property->bill }}</td>
                                            <td>{{ ($property->is_burglar_alarm) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($property->is_cctv) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($property->is_swimmingpool) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $property->enquiry_contact }}</td>
                                            <td>{{ $property->enquiry_email }}</td>
                                            <td>{{ $property->sale_condition }}</td>
                                            <td>{{ $property->rent_condition }}</td>
                                            <td>{{ $property->bedrooms }}</td>
                                            <td>{{ $property->bathrooms }}</td>
                                            <td>{{ $property->halls }}</td>
                                            <td>{{ $property->reseptions }}</td>
                                            <td>{{ $property->floors }}</td>--}}
                                            {{--<td>{{ implode(', ', $property->parking) }}</td>
                                            <td>{{ implode(', ', $property->garden) }}</td>
                                            <td>{{ $property->internal_area }}</td>
                                            <td>{{ $property->land_area }}</td>
                                            <td>{{ $property->area_unit }}</td>--}}
                                            <td>{{ $property->saleprice }}</td>
                                            <td>{{ $property->letamount }}</td>
                                            {{--<td>{{ ($property->price_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $property->rent_frequency }}</td>
                                            <td>{{ $property->deposite }}</td>
                                            <td>{{ ($property->deposite_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $property->admin_fee_max }}</td>
                                            <td>{{ $property->admin_fee_exe }}</td>
                                            <td>{{ ($property->admin_fee_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $property->date_intake }}</td>
                                            <td>{{ $property->date_published }}</td>
                                            <td>{{ $property->date_revoked }}</td>
                                            <td>{{ $property->further_details }}</td>
                                            <td>{{ $property->property_details }}</td>
                                            <td>{{ ($property->property_details_display) ? 'Yes' : 'No' }}</td>--}}
                                            <td>{{ optional($property->owner)->name }}</td>
                                            <td>{{ ($property->is_complete) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($property->is_publish) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($property->is_sold) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($property->is_let) ? 'Yes' : 'No' }}</td>

                                            <td>

                                                <form method="POST" action="{!! route('properties.property.destroy', $property->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                        <a href="{{ route('properties.property.show', $property->id ) }}" class="btn btn-info" title="Show Property">
                                                            <span class="fa fa-list-ul" aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ route('properties.property.edit', $property->id ) }}" class="btn btn-primary" title="Edit Property">
                                                            <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                                                        </a>

                                                        <button type="submit" class="btn btn-danger" title="Delete Property" onclick="return confirm(&quot;Click Ok to delete Property.&quot;)">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                </form>
                                                
                                            </td>
                                            <td>
                                                <form action="{{ route('rooms.room.multicreate') }}" method="POST">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $property->id }}">

                                                    <input type="submit" class="btn btn-success" value="Add room">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('owners.owner.ownercreate') }}" method="POST">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $property->id }}">

                                                    <input type="submit" class="btn btn-success" value="Add owner">
                                                </form>
                                                {{--<a href="{{ route('owners.owner.ownercreate') }}" class="btn btn-success" title="Create Owner">Add Owner</a>--}}
                                            </td>
                                            <td>
                                                <a href="{{ route('image.create', $property->id ) }}" class="btn btn-success" title="Add images">Add Images</a>
                                            </td>
                                        </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="panel-footer">
                            {!! $properties->render("pagination::bootstrap-4") !!}
                        </div>
                        
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection