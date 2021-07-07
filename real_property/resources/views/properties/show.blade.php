@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <form method="POST" action="{!! route('properties.property.destroy', $property->id) !!}" accept-charset="UTF-8">
                <input name="_method" value="DELETE" type="hidden">
                {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('properties.property.index') }}" class="btn btn-primary" title="Show All Property">
                        <span class="fa fa-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('properties.property.create') }}" class="btn btn-success" title="Create New Property">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                                        
                    <a href="{{ route('properties.property.edit', $property->id ) }}" class="btn btn-primary" title="Edit Property">
                        <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Property" onclick="return confirm(&quot;Click Ok to delete Property.?&quot;)">
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
                        {{ isset($title) ? $title : 'Proparty' }}
                    </h2>
                </span>  
            </div>
            <div class="card-body">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Catagery</dt>
                            <dd>{{ $property->catagery }}</dd>
                            <dt>Property Type</dt>
                            <dd>{{ optional($property->propertytype)->type_name }}</dd>
                            <dt>Age</dt>
                            <dd>{{ $property->age }}</dd>
                            <dt>Minimum Term</dt>
                            <dd>{{ $property->minimum_term }}</dd>
                            <dt>Door No</dt>
                            <dd>{{ $property->door_no }}</dd>
                            <dt>Door Name</dt>
                            <dd>{{ $property->door_name }}</dd>
                            <dt>First Postcode</dt>
                            <dd>{{ $property->first_postcode }}</dd>
                            <dt>Second Postcode</dt>
                            <dd>{{ $property->second_postcode }}</dd>
                            <dt>Street Name</dt>
                            <dd>{{ $property->street_name }}</dd>
                            <dt>Second Line of Address</dt>
                            <dd>{{ $property->second_line_of_address }}</dd>
                            <dt>Post Town</dt>
                            <dd>{{ $property->post_town }}</dd>
                            <dt>Post City</dt>
                            <dd>{{ $property->post_city }}</dd>
                            <dt>Post Country</dt>
                            <dd>{{ $property->post_country }}</dd>
                            <dt>Display Address Line1</dt>
                            <dd>{{ $property->display_address_line1 }}</dd>
                            <dt>Display Address Line2</dt>
                            <dd>{{ $property->display_address_line2 }}</dd>
                            <dt>Display Address</dt>
                            <dd>{{ ($property->display_address) ? 'Yes' : 'No' }}</dd>
                            <dt>Condition of Property</dt>
                            <dd>{{ $property->condition_of_property }}</dd>
                            <dt>Condition Furnished</dt>
                            <dd>{{ $property->condition_furnished }}</dd>
                            <dt>Access type</dt>
                            <dd>{{ $property->access_type }}</dd>
                            <dt>Heating Type</dt>
                            <dd>{{ $property->heating_type }}</dd>
                            <dt>Bill</dt>
                            <dd>{{ $property->bill }}</dd>
                            <dt>Burglar Alarm</dt>
                            <dd>{{ ($property->is_burglar_alarm) ? 'Yes' : 'No' }}</dd>
                            <dt>CCTV</dt>
                            <dd>{{ ($property->is_cctv) ? 'Yes' : 'No' }}</dd>
                            <dt>Swimming Pool</dt>
                            <dd>{{ ($property->is_swimmingpool) ? 'Yes' : 'No' }}</dd>
                            <dt>Property Enquiry Contact No</dt>
                            <dd>{{ $property->enquiry_contact }}</dd>
                            <dt>Property Enquiry Email</dt>
                            <dd>{{ $property->enquiry_email }}</dd>
                            <dt>Sale Condition</dt>
                            <dd>{{ implode(', ', $property->sale_condition) }}</dd>
                            <dt>Rent Condition</dt>
                            <dd>{{ implode(', ', $property->rent_condition) }}</dd>
                            <dt>Bedrooms</dt>
                            <dd>{{ $property->bedrooms }}</dd>
                            <dt>Bathrooms</dt>
                            <dd>{{ $property->bathrooms }}</dd>
                            <dt>Halls</dt>
                            <dd>{{ $property->halls }}</dd>
                            <dt>Reseptions</dt>
                            <dd>{{ $property->reseptions }}</dd>
                            <dt>Floors</dt>
                            <dd>{{ $property->floors }}</dd>
                            <dt>Parking</dt>
                            <dd>{{ implode(', ', $property->parking) }}</dd>
                            <dt>Garden</dt>
                            <dd>{{ implode(', ', $property->garden) }}</dd>
                            <dt>Internal Area</dt>
                            <dd>{{ $property->internal_area }}</dd>
                            <dt>Land Area</dt>
                            <dd>{{ $property->land_area }}</dd>
                            <dt>Area Unit</dt>
                            <dd>{{ $property->area_unit }}</dd>
                            <dt>Sale Price</dt>
                            <dd>{{ $property->saleprice }}</dd>
                            <dt>Let Amont</dt>
                            <dd>{{ $property->letamount }}</dd>
                            <dt>Price Flag</dt>
                            <dd>{{ ($property->price_flag) ? 'Yes' : 'No' }}</dd>
                            <dt>Rent Frequency</dt>
                            <dd>{{ $property->rent_frequency }}</dd>
                            <dt>Deposite Minimum</dt>
                            <dd>{{ $property->deposite }}</dd>
                            <dt>Deposite Flag</dt>
                            <dd>{{ ($property->deposite_flag) ? 'Yes' : 'No' }}</dd>
                            <dt>Admin Fee Maxmimum</dt>
                            <dd>{{ $property->admin_fee_max }}</dd>
                            <dt>Admin Fee Exemption</dt>
                            <dd>{{ $property->admin_fee_exe }}</dd>
                            <dt>Admin Fee Flag</dt>
                            <dd>{{ ($property->admin_fee_flag) ? 'Yes' : 'No' }}</dd>
                            <dt>date Intake</dt>
                            <dd>{{ $property->date_intake }}</dd>
                            <dt>date Published</dt>
                            <dd>{{ $property->date_published }}</dd>
                            <dt>date Revoked</dt>
                            <dd>{{ $property->date_revoked }}</dd>
                            <dt>Further Details</dt>
                            <dd>{{ implode(', ', $property->further_details) }}</dd>
                            <dt>Property Details</dt>
                            <dd>{{ $property->property_details }}</dd>
                            <dt>Property Details Display</dt>
                            <dd>{{ ($property->property_details_display) ? 'Yes' : 'No' }}</dd>
                            <dt>Owner</dt>
                            <dd>{{ optional($property->owner)->name }}</dd>
                            <dt>Complete</dt>
                            <dd>{{ ($property->is_complete) ? 'Yes' : 'No' }}</dd>
                            <dt>Is Publish</dt>
                            <dd>{{ ($property->is_publish) ? 'Yes' : 'No' }}</dd>
                            <dt>Sold?</dt>
                            <dd>{{ ($property->is_sold) ? 'Yes' : 'No' }}</dd>
                            <dt>Let?</dt>
                            <dd>{{ ($property->is_let) ? 'Yes' : 'No' }}</dd>

                        </dl>

                    </div>
                </div>
            </div>
        </div> 
    </div>


@endsection