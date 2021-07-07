@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
        <form method="POST" action="{!! route('proparties.proparty.destroy', $proparty->id) !!}"
            accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('proparties.proparty.index') }}" class="btn btn-primary"
                    title="Show All Proparty Type">
                    <span class="fa fa-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparties.proparty.create') }}" class="btn btn-success"
                    title="Create New Proparty Type">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparties.proparty.edit', $proparty->id ) }}" class="btn btn-primary"
                    title="Edit Proparty Type">
                    <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                </a>

                <button type="submit" class="btn btn-danger" title="Delete Proparty" onclick="return confirm(&quot;Click Ok to delete Proparty.?&quot;)">
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
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th colspan="2" style="color:#FF4500"><h1>Property Details</h1></th>
                                    </tr>
                                    <tr>
                                        <th>Catagery :</th>
                                        <td>{{ $proparty->catagery }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Type :</th>
                                        <td>{{ optional($proparty->propertytype)->type_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Age :</th>
                                        <td>{{ $proparty->age }}</td>
                                    </tr>
                                    <tr>
                                        <th>Minimum Term :</th>
                                        <td>{{ $proparty->minimum_term }}</td>
                                    </tr>
                                    <tr>
                                        <th>Door No :</th>
                                        <td>{{ $proparty->door_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Door Name :</th>
                                        <td>{{ $proparty->door_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>First Postcode :</th>
                                        <td>{{ $proparty->first_pastcode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Second Postcode :</th>
                                        <td>{{ $proparty->second_pastcode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Street Name :</th>
                                        <td>{{ $proparty->street_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Second Street Name :</th>
                                        <td>{{ $proparty->second_street_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Post Town :</th>
                                        <td>{{ $proparty->post_town }}</td>
                                    </tr>
                                    <tr>
                                        <th>Post City :</th>
                                        <td>{{ $proparty->post_city }}</td>
                                    </tr>
                                    <tr>
                                        <th>Post Country :</th>
                                        <td>{{ $proparty->post_country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Display Address :</th>
                                        <td>{{ $proparty->display_address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Condition of Property :</th>
                                        <td>{{ $proparty->condition_of_property }}</td>
                                    </tr>
                                    <tr>
                                        <th>Furnished Property :</th>
                                        <td>{{ implode(', ', $proparty->furnished_property) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Accessability :</th>
                                        <td>{{ implode(', ', $proparty->accessability) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Heating Type :</th>
                                        <td>{{ implode('; ', $proparty->heating_type) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Is Burglar Alarm :</th>
                                        <td>{{ ($proparty->is_burglar_alarm) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Is CCTV :</th>
                                        <td>{{ ($proparty->is_cctv) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bill :</th>
                                        <td>{{ $proparty->bill }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Enquiry Contact :</th>
                                        <td>{{ $proparty->enquiry_contact }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Enquiry Email :</th>
                                        <td>{{ $proparty->enquiry_email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sale Condition :</th>
                                        <td>{{ implode(', ', $proparty->sale_condition) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Rent Condition :</th>
                                        <td>{{ implode(', ', $proparty->rent_condition) }}</td>
                                    </tr>
                                    <tr>
                                        <th>NO of Bedrooms :</th>
                                        <td>{{ $proparty->no_of_bedrooms }}</td>
                                    </tr>
                                    <tr>
                                        <th>NO of Bathrooms :</th>
                                        <td>{{ $proparty->no_of_bathrooms }}</td>
                                    </tr>
                                    <tr>
                                        <th>NO of Halls :</th>
                                        <td>{{ $proparty->no_of_halls }}</td>
                                    </tr>
                                    <tr>
                                        <th>NO of Reseptions :</th>
                                        <td>{{ $proparty->no_of_reseptions }}</td>
                                    </tr>
                                    <tr>
                                        <th>Floors :</th>
                                        <td>{{ $proparty->floors }}</td>
                                    </tr>
                                    <tr>
                                        <th>Parking :</th>
                                        <td>{{ implode('& ', $proparty->parking) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Garden :</th>
                                        <td>{{ implode('& ', $proparty->garden) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Internal Area :</th>
                                        <td>{{ $proparty->internal_area }}{{ $proparty->area_unit }}</td>
                                    </tr>
                                    <tr>
                                        <th>Land Area :</th>
                                        <td>{{ $proparty->land_area }}{{ $proparty->area_unit }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price :</th>
                                        <td>{{ $proparty->price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price Flag :</th>
                                        <td>{{ ($proparty->price_flag) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Rent Frequency :</th>
                                        <td>{{ $proparty->rent_frequency }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deposite Minimum :</th>
                                        <td>{{ $proparty->deposite }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deposite Flag :</th>
                                        <td>{{ ($proparty->deposite_flag) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Fee Maxmimum :</th>
                                        <td>{{ $proparty->admin_fee_max }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Fee Exemption :</th>
                                        <td>{{ $proparty->admin_fee_exe }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Fee Flag :</th>
                                        <td>{{ ($proparty->admin_fee_flag) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date Intake :</th>
                                        <td>{{ $proparty->date_intake }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date Published :</th>
                                        <td><dd>{{ $proparty->date_published }}</dd></td>
                                    </tr>
                                    <tr>
                                        <th>Date Revoked :</th>
                                        <td>{{ $proparty->date_revoked }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Details :</th>
                                        <td>{{ $proparty->property_details }}</td>
                                    </tr>
                                    <tr>
                                        <th>Further Details :</th>
                                        <td>{{ implode(', ', $proparty->further_details) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Details Display :</th>
                                        <td>{{ ($proparty->property_details_display) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Owner :</th>
                                        <td>{{ optional($proparty->ownerman)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Is Complete  :</th>
                                        <td>{{ ($proparty->is_complete) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Is Publish  :</th>
                                        <td>{{ ($proparty->is_publish) ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="color:#FF4500"><h1>Owner Details</h1></th>
                                    </tr>
                                    <tr>
                                        <th>Owner Name:</th>
                                        <td>{{ optional($proparty->ownerman)->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact No:</th>
                                        <td>{{ optional($proparty->ownerman)->contact_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ optional($proparty->ownerman)->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ optional($proparty->ownerman)->address }}</td>
                                    </tr>  
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th colspan="6" style="color:#FF4500"><h1>Room Details</h1></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Room Name</th>
                                        <th>Room Length</th>
                                        <th>Room Width</th>
                                        <th>Room Dimention display</th>
                                        <th>Property Id</th>
                                    </tr>
                                    @php $i = 1; @endphp
                                    @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $room->room_name }}</td>
                                        <td>{{ $room->room_length }} {{ $room->room_dimention_unit }}</td>
                                        <td>{{ $room->room_width }} {{ $room->room_dimention_unit }}</td>
                                        <td>{{ $room->room_dimention_display }} {{ $room->room_area_unit }}</td>
                                        <td>{{ $room->property_id }}</td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                </table>
                            </div>
                            {{--<dl>
                                <dt>Catagery</dt>
                                <dd>{{ $proparty->catagery }}</dd>
                                <dt>Property Type</dt>
                                <dd>{{ optional($proparty->propertytype)->type_name }}</dd>
                                <dt>Property Age</dt>
                                <dd>{{ $proparty->age }}</dd>
                                <dt>Minimum Term</dt>
                                <dd>{{ $proparty->minimum_term }}</dd>
                                <dt>Door No</dt>
                                <dd>{{ $proparty->door_no }}</dd>
                                <dt>Door Name</dt>
                                <dd>{{ $proparty->door_name }}</dd>
                                <dt>First Postcode</dt>
                                <dd>{{ $proparty->first_pastcode }}</dd>
                                <dt>Second Postcode</dt>
                                <dd>{{ $proparty->second_pastcode }}</dd>
                                <dt>Post Town</dt>
                                <dd>{{ $proparty->post_town }}</dd>
                                <dt>Post City</dt>
                                <dd>{{ $proparty->post_city }}</dd>
                                <dt>Post Country</dt>
                                <dd>{{ $proparty->post_country }}</dd>
                                <dt>Display Address</dt>
                                <dd>{{ $proparty->display_address }}</dd>
                                <dt>Condition of Property</dt>
                                <dd>{{ $proparty->condition_of_property }}</dd>
                                <dt>Furnished Property</dt>
                                <dd>{{ implode(', ', $proparty->furnished_property) }}</dd>
                                <dt>Accessability</dt>
                                <dd>{{ implode('; ', $proparty->accessability) }}</dd>
                                <dt>Heating Type</dt>
                                <dd>{{ implode('; ', $proparty->heating_type) }}</dd>
                                <dt>Is Burglar Alarm</dt>
                                <dd>{{ ($proparty->is_burglar_alarm) ? 'Yes' : 'No' }}</dd>
                                <dt>Is CCTV</dt>
                                <dd>{{ ($proparty->is_cctv) ? 'Yes' : 'No' }}</dd>
                                <dt>Bill</dt>
                                <dd>{{ $proparty->bill }}</dd>
                                <dt>Property Enquiry Contact</dt>
                                <dd>{{ $proparty->enquiry_contact }}</dd>
                                <dt>Property Enquiry Email</dt>
                                <dd>{{ $proparty->enquiry_email }}</dd>
                                <dt>Sale Condition</dt>
                                <dd>{{ $proparty->sale_condition }}</dd>
                                <dt>Rent Condition</dt>
                                <dd>{{ $proparty->rent_condition }}</dd>
                                <dt>Property Details</dt>
                                <dd>{{ $proparty->property_details }}</dd>
                                <dt>Property Details Display</dt>
                                <dd>{{ $proparty->property_details_display }}</dd>
                                <dt>NO of Bedrooms</dt>
                                <dd>{{ $proparty->no_of_bedrooms }}</dd>
                                <dt>NO of Halls</dt>
                                <dd>{{ $proparty->no_of_halls }}</dd>
                                <dt>NO of Reseptions</dt>
                                <dd>{{ $proparty->no_of_reseptions }}</dd>
                                <dt>Floors</dt>
                                <dd>{{ $proparty->floors }}</dd>
                                <dt>Parking</dt>
                                <dd>{{ implode(', ', $proparty->parking) }}</dd>
                                <dt>Garden</dt>
                                <dd>{{ implode(', ', $proparty->garden) }}</dd>
                                <dt>Internal Area</dt>
                                <dd>{{ $proparty->internal_area }}</dd>
                                <dt>Land Area</dt>
                                <dd>{{ $proparty->land_area }}</dd>
                                <dt>Price</dt>
                                <dd>{{ $proparty->price }}</dd>
                                <dt>Price Flag</dt>
                                <dd>{{ ($proparty->price_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>Rent Frequency</dt>
                                <dd>{{ $proparty->rent_frequency }}</dd>
                                <dt>Deposite Minimum</dt>
                                <dd>{{ $proparty->deposite }}</dd>
                                <dt>Deposite Flag</dt>
                                <dd>{{ ($proparty->deposite_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>Admin Fee Maxmimum</dt>
                                <dd>{{ $proparty->admin_fee_max }}</dd>
                                <dt>Admin Fee Exemption</dt>
                                <dd>{{ $proparty->admin_fee_exe }}</dd>
                                <dt>Admin Fee Flag</dt>
                                <dd>{{ ($proparty->admin_fee_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>date Intake</dt>
                                <dd>{{ $proparty->date_intake }}</dd>
                                <dt>date Published</dt>
                                <dd>{{ $proparty->date_published }}</dd>
                                <dt>date Revoked</dt>
                                <dd>{{ $proparty->date_revoked }}</dd>
                                <dt>Owner</dt>
                                <dd>{{ $proparty->owner }}</dd>
                                <dt>Is Publish</dt>
                                <dd>{{ ($proparty->is_publish) ? 'Yes' : 'No' }}</dd>
                            </dl>--}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection