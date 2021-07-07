<div class="row">
    <div class="col-md-3">
        <div class="form-group {{ $errors->has('catagery') ? 'has-error' : '' }}">
            <label for="catagery" class="col-md-12 control-label">Catagery</label>
            <div class="col-md-12">
                <select class="form-control" id="catagery" name="catagery">
                        <option value=""{{ old('catagery', optional($property)->catagery ?: '') == '' ? 'selected' : '' }} disabled selected>Catagery</option>  
                    @foreach (['for sale' => 'For Sale',
                                'for let' => 'For Let',
                                'for shared' => 'For Shared'] as $key => $text)
                        <option value="{{ $key }}" {{ old('catagery', optional($property)->catagery) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('catagery', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
            <label for="type" class="col-md-12 control-label">Property Type</label>
            <div class="col-md-12">
                <select class="form-control" id="type" name="type">
                        <option value="" {{ old('type', optional($property)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
                    @foreach ($propertytypes as $key => $propertytype)
                        <option value="{{ $key }}" {{ old('type', optional($property)->type) == $key ? 'selected' : '' }}>
                            {{ $propertytype }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
            <label for="age" class="col-md-12 control-label">Age</label>
            <div class="col-md-12">
                <select class="form-control" id="age" name="age">
                        <option value="" {{ old('age', optional($property)->age ?: '') == '' ? 'selected' : '' }} selected>Age</option>   
                    @foreach (['Pre' => 'Pre',
                                'Post' => 'Post',
                                'MidAge' => 'MidAge'] as $key => $text)
                        <option value="{{ $key }}" {{ old('age', optional($property)->age) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('minimum_term') ? 'has-error' : '' }}">
            <label for="minimum_term" class="col-md-12 control-label">Minimum Term</label>
            <div class="col-md-12">
                <select class="form-control" id="minimum_term" name="minimum_term">
                    <option value="" style= {{ old('minimum_term', optional($property)->minimum_term ?: '') == '' ? 'selected' : '' }} selected>Minimum term</    
                    @foreach (['1 month' => '1 Month',
                                '6 month' => '6 Month',
                                '12 month' => '12 Month',
                                'long term' => 'Long Term'] as $key => $text)
                        <option value="{{ $key }}" {{ old('minimum_term', optional($property)->minimum_term) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('minimum_term', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input class="btn btn-org" type="submit" value="Update">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Property Address</h4><hr color="orange"/>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('door_no') ? 'has-error' : '' }}">
            <label for="door_no" class="col-md-12 control-label">Door No</label>
            <div class="col-md-12">
                <input class="form-control" name="door_no" type="number" id="door_no" value="{{ old('door_no', optional($property)->door_no) }}" min="0" max="2147483647" placeholder="Enter door no here...">
                {!! $errors->first('door_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('door_name') ? 'has-error' : '' }}">
            <label for="door_name" class="col-md-12 control-label">Door Name</label>
            <div class="col-md-12">
                <input class="form-control" name="door_name" type="text" id="door_name" value="{{ old('door_name', optional($property)->door_name) }}" minlength="1" placeholder="Enter door name here...">
                {!! $errors->first('door_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('first_postcode') ? 'has-error' : '' }}">
            <label for="first_postcode" class="col-md-12 control-label">First Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="first_postcode" type="text" id="first_postcode" value="{{ old('first_postcode', optional($property)->first_postcode) }}" placeholder="Enter first postcode here...">
                {!! $errors->first('first_postcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_postcode') ? 'has-error' : '' }}">
            <label for="second_postcode" class="col-md-12 control-label">Second Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="second_postcode" type="text" id="second_postcode" value="{{ old('second_postcode', optional($property)->second_postcode) }}" placeholder="Enter second postcode here...">
                {!! $errors->first('second_postcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('street_name') ? 'has-error' : '' }}">
            <label for="street_name" class="col-md-12 control-label">Street Name</label>
            <div class="col-md-12">
                <input class="form-control" name="street_name" type="text" id="street_name" value="{{ old('street_name', optional($property)->street_name) }}" placeholder="Enter street name here...">
                {!! $errors->first('street_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_line_of_address') ? 'has-error' : '' }}">
            <label for="second_line_of_address" class="col-md-12 control-label">Second Line of Address</label>
            <div class="col-md-12">
                <input class="form-control" name="second_line_of_address" type="text" id="second_line_of_address" value="{{ old('second_line_of_address', optional($property)->second_line_of_address) }}" placeholder="Enter second line of address here...">
                {!! $errors->first('second_line_of_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_town') ? 'has-error' : '' }}">
            <label for="post_town" class="col-md-12 control-label">Post Town</label>
            <div class="col-md-12">
                <input class="form-control" name="post_town" type="text" id="post_town" value="{{ old('post_town', optional($property)->post_town) }}" minlength="1" placeholder="Enter post town here...">
                {!! $errors->first('post_town', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_city') ? 'has-error' : '' }}">
            <label for="post_city" class="col-md-12 control-label">Post City</label>
            <div class="col-md-12">
                <input class="form-control" name="post_city" type="text" id="post_city" value="{{ old('post_city', optional($property)->post_city) }}" minlength="1" placeholder="Enter post city here...">
                {!! $errors->first('post_city', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_country') ? 'has-error' : '' }}">
            <label for="post_country" class="col-md-12 control-label">Post Country</label>
            <div class="col-md-12">
                <input class="form-control" name="post_country" type="text" id="post_country" value="{{ old('post_country', optional($property)->post_country) }}" minlength="1" placeholder="Enter post country here...">
                {!! $errors->first('post_country', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group {{ $errors->has('display_address_line1') ? 'has-error' : '' }}">
            <label for="display_address_line1" class="col-md-12 control-label">Display Address Line1</label>
            <div class="col-md-12">
                <input class="form-control" name="display_address_line1" type="text" id="display_address_line1" value="{{ old('display_address_line1', optional($property)->display_address_line1) }}" minlength="1" placeholder="Enter display address line 1 here...">
                {!! $errors->first('display_address_line1', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group {{ $errors->has('display_address_line2') ? 'has-error' : '' }}">
            <label for="display_address_line2" class="col-md-12 control-label">Display Address Line2</label>
            <div class="col-md-12">
                <input class="form-control" name="display_address_line2" type="text" id="display_address_line2" value="{{ old('display_address_line2', optional($property)->display_address_line2) }}" minlength="1" placeholder="Enter display address line 2 here...">
                {!! $errors->first('display_address_line2', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('display_address') ? 'has-error' : '' }}">
            <label for="display_address" class="col-md-12 control-label">Display Address</label>
            <div class="col-md-12">
                <div class="checkbox">
                    <label for="display_address_1">
                        <input id="display_address_1" class="" name="display_address" type="checkbox" value="1" {{ old('display_address', optional($property)->display_address) == '1' ? 'checked' : '' }}>
                        Yes
                    </label>
                </div>

                {!! $errors->first('display_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input class="btn btn-org" type="submit" value="Update">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Property Condition & Details</h4><hr color="orange"/>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('condition_of_property') ? 'has-error' : '' }}">
            <label for="condition_of_property" class="col-md-12 control-label">Condition of Property</label>
            <div class="col-md-12">
                <label for="condition_of_property_require_painting" class="checkbox-inline">
                    <input id="condition_of_property_require_painting" class="required" name="condition_of_property" type="checkbox" value="Require Painting" {{ old('condition_of_property', optional($property)->condition_of_property) == 'Require Painting' ? 'checked' : '' }}>
                    Require Painting
                </label>
                <label for="condition_of_property_fully_decorated" class="checkbox-inline">
                    <input id="condition_of_property_fully_decorated" class="required" name="condition_of_property" type="checkbox" value="Fully Decorated" {{ old('condition_of_property', optional($property)->condition_of_property) == 'Fully Decorated' ? 'checked' : '' }}>
                    Fully Decorated
                </label>

                {!! $errors->first('condition_of_property', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('condition_furnished') ? 'has-error' : '' }}">
            <label for="condition_furnished" class="col-md-12 control-label">Condition Furnished</label>
            <div class="col-md-12">
                <label for="condition_furnished_fully" class="checkbox-inline">
                    <input id="condition_furnished_fully" class="required" name="condition_furnished" type="checkbox" value="Fully" {{ old('condition_furnished', optional($property)->condition_furnished) == 'Fully' ? 'checked' : '' }}>
                    Fully
                </label>
                <label for="condition_furnished_partial" class="checkbox-inline">
                    <input id="condition_furnished_partial" class="required" name="condition_furnished" type="checkbox" value="Partial" {{ old('condition_furnished', optional($property)->condition_furnished) == 'Partial' ? 'checked' : '' }}>
                    Partial
                </label>
                <label for="condition_furnished_none" class="checkbox-inline">
                    <input id="condition_furnished_none" class="required" name="condition_furnished" type="checkbox" value="None" {{ old('condition_furnished', optional($property)->condition_furnished) == 'None' ? 'checked' : '' }}>
                    None
                </label>

                {!! $errors->first('condition_furnished', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('access_type') ? 'has-error' : '' }}">
            <label for="access_type" class="col-md-12 control-label">Access type</label>
            <div class="col-md-12">
                <label for="access_type_shared_entry" class="checkbox-inline">
                    <input id="access_type_shared_entry" class="required" name="access_type" type="checkbox" value="Shared Entry" {{ old('access_type', optional($property)->access_type) == 'Shared Entry' ? 'checked' : '' }}>
                    Shared Entry
                </label>
                <label for="access_type_seperate_entry" class="checkbox-inline">
                    <input id="access_type_seperate_entry" class="required" name="access_type" type="checkbox" value="Seperate Entry" {{ old('access_type', optional($property)->access_type) == 'Seperate Entry' ? 'checked' : '' }}>
                    Seperate Entry
                </label>

                {!! $errors->first('access_type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('heating_type') ? 'has-error' : '' }}">
            <label for="heating_type" class="col-md-12 control-label">Heating Type</label>
            <div class="col-md-12">
                <label for="heating_type_central" class="checkbox-inline">
                    <input id="heating_type_central" class="required" name="heating_type" type="checkbox" value="Central"  {{ old('heating_type', optional($property)->heating_type) == 'Central' ? 'checked' : '' }}>
                    Central
                </label>
                <label for="heating_type_independent" class="checkbox-inline">
                    <input id="heating_type_independent" class="required" name="heating_type" type="checkbox" value="Independent" {{ old('heating_type', optional($property)->heating_type) == 'Independent' ? 'checked' : '' }}>
                    Independent
                </label>

                {!! $errors->first('heating_type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('bill') ? 'has-error' : '' }}">
            <label for="bill" class="col-md-12 control-label">Bill</label>
            <div class="col-md-12">
                <label for="bill_fully_included" class="checkbox-inline">
                    <input id="bill_fully_included" class="required" name="bill" type="checkbox" value="Fully Included"  {{ old('bill', optional($property)->bill) == 'Fully Included' ? 'checked' : '' }}>
                    Fully Included
                </label>
                <label for="bill_partial" class="checkbox-inline">
                    <input id="bill_partial" class="required" name="bill" type="checkbox" value="Partial" {{ old('bill', optional($property)->bill) == 'Partial' ? 'checked' : '' }}>
                    Partial
                </label>

                {!! $errors->first('bill', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_burglar_alarm') ? 'has-error' : '' }}">
            <label for="is_burglar_alarm" class="col-md-12 control-label">Burglar Alarm</label>
            <div class="col-md-12">
                <label for="is_burglar_alarm_1" class="checkbox-inline">
                    <input id="is_burglar_alarm_1" class="" name="is_burglar_alarm" type="checkbox" value="1" {{ old('is_burglar_alarm', optional($property)->is_burglar_alarm) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_burglar_alarm', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_cctv') ? 'has-error' : '' }}">
            <label for="is_cctv" class="col-md-12 control-label">CCTV</label>
            <div class="col-md-12">
                <label for="is_cctv_1" class="checkbox-inline">
                    <input id="is_cctv_1" class="" name="is_cctv" type="checkbox" value="1" {{ old('is_cctv', optional($property)->is_cctv) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_cctv', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_swimmingpool') ? 'has-error' : '' }}">
            <label for="is_swimmingpool" class="col-md-12 control-label">Swimming Pool</label>
            <div class="col-md-12">
                <label for="is_swimmingpool_1" class="checkbox-inline">
                    <input id="is_swimmingpool_1" class="" name="is_swimmingpool" type="checkbox" value="1" {{ old('is_swimmingpool', optional($property)->is_swimmingpool) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_swimmingpool', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('enquiry_contact') ? 'has-error' : '' }}">
            <label for="enquiry_contact" class="col-md-12 control-label">Property Enquiry Contact No</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_contact" type="text" id="enquiry_contact" value="{{ old('enquiry_contact', optional($property)->enquiry_contact) }}" minlength="1" placeholder="Enter property enquiry contact here...">
                {!! $errors->first('enquiry_contact', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('enquiry_email') ? 'has-error' : '' }}">
            <label for="enquiry_email" class="col-md-12 control-label">Property Enquiry Email</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_email" type="email" id="enquiry_email" value="{{ old('enquiry_email', optional($property)->enquiry_email) }}" placeholder="Enter property enquiry email here...">
                {!! $errors->first('enquiry_email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        {{--<div class="form-group {{ $errors->has('sale_condition') ? 'has-error' : '' }}">
            <label for="sale_condition" class="col-md-12 control-label">Sale Condition</label>
            <div class="col-md-12">
                <input class="form-control" name="sale_condition" type="text" id="sale_condition" value="{{ old('sale_condition', optional($property)->sale_condition) }}" minlength="1" placeholder="Enter sale condition here...">
                {!! $errors->first('sale_condition', '<p class="help-block">:message</p>') !!}
            </div>
        </div>--}}
        <div class="form-group table-responsive">
            <label for="sale_condition" class="col-md-10 control-label">Sale Condition</label><a class="btn-sm btn-success" onclick="addsale();"><i class="fa fa-plus"></i></a>
            <table id="faqs" class="table table-borderless">
                <tbody>
                    @if( isset(optional($property)->sale_condition))
                        @foreach(optional($property)->sale_condition as $key)
                        <tr id="faqs-row">
                            <td>
                                <input class="form-control" name="sale_condition[]" type="text" id="sale_condition" value="{{ $key }}" placeholder="Enter sale condition here...">
                                {!! $errors->first('sale_condition', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger" onclick="SomeDeleteRowFunction()"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>
                                <input class="form-control" name="sale_condition[]" type="text" id="sale_condition" value="{{ old('sale_condition') }}" placeholder="Enter sale condition here...">
                                {!! $errors->first('sale_condition', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-6">
        {{--<div class="form-group {{ $errors->has('rent_condition') ? 'has-error' : '' }}">
            <label for="rent_condition" class="col-md-12 control-label">Rent Condition</label>
            <div class="col-md-12">
                <input class="form-control" name="rent_condition" type="text" id="rent_condition" value="{{ old('rent_condition', optional($property)->rent_condition) }}" minlength="1" placeholder="Enter rent condition here...">
                {!! $errors->first('rent_condition', '<p class="help-block">:message</p>') !!}
            </div>
        </div>--}}
        <div class="form-group table-responsive">
            <label for="rent_condition" class="col-md-10 control-label">Rent Condition</label><a class="btn-sm btn-success" onclick="addrent();"><i class="fa fa-plus"></i></a>
            <table id="faqr" class="table table-borderless">
                <tbody>
                    @if( isset(optional($property)->rent_condition))
                        @foreach(optional($property)->rent_condition as $key)
                        <tr>
                            <td>
                                <input class="form-control" name="rent_condition[]" type="text" id="rent_condition" value="{{ $key }}" placeholder="Enter rent condition here...">
                                {!! $errors->first('rent_condition', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger" onclick="SomeDeleteRowFunction()"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>
                                <input class="form-control" name="rent_condition[]" type="text" id="rent_condition" value="{{ old('rent_condition') }}" placeholder="Enter rent condition here...">
                                {!! $errors->first('rent_condition', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input class="btn btn-org" type="submit" value="Update">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Internal External Structure</h4><hr color="orange"/>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('bedrooms') ? 'has-error' : '' }}">
            <label for="bedrooms" class="col-md-12 control-label">Bedrooms</label>
            <div class="col-md-12">
                <input class="form-control" name="bedrooms" type="number" id="bedrooms" value="{{ old('bedrooms', optional($property)->bedrooms) }}" min="0" max="10" placeholder="Enter bedrooms here...">
                {!! $errors->first('bedrooms', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('bathrooms') ? 'has-error' : '' }}">
            <label for="bathrooms" class="col-md-12 control-label">Bathrooms</label>
            <div class="col-md-12">
                <input class="form-control" name="bathrooms" type="number" id="bathrooms" value="{{ old('bathrooms', optional($property)->bathrooms) }}" min="0" max="10" placeholder="Enter bathrooms here...">
                {!! $errors->first('bathrooms', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('halls') ? 'has-error' : '' }}">
            <label for="halls" class="col-md-12 control-label">Halls</label>
            <div class="col-md-12">
                <input class="form-control" name="halls" type="number" id="halls" value="{{ old('halls', optional($property)->halls) }}" min="0" max="10" placeholder="Enter halls here...">
                {!! $errors->first('halls', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('reseptions') ? 'has-error' : '' }}">
            <label for="reseptions" class="col-md-12 control-label">Reseptions</label>
            <div class="col-md-12">
                <input class="form-control" name="reseptions" type="number" id="reseptions" value="{{ old('reseptions', optional($property)->reseptions) }}" min="0" max="10" placeholder="Enter reseptions here...">
                {!! $errors->first('reseptions', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('floors') ? 'has-error' : '' }}">
            <label for="floors" class="col-md-12 control-label">Floors</label>
            <div class="col-md-12">
                <input class="form-control" name="floors" type="number" id="floors" value="{{ old('floors', optional($property)->floors) }}" min="0" max="100" placeholder="Enter floors here...">
                {!! $errors->first('floors', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('parking') ? 'has-error' : '' }}">
            <label for="parking" class="col-md-12 control-label">Parking</label>
            <div class="col-md-12">
                <label for="parking_allocated" class="checkbox-inline">
                    <input id="parking_allocated" class="required" name="parking[]" type="checkbox" value="Allocated" {{ in_array('Allocated', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    Allocated
                </label>
                <label for="parking_garage" class="checkbox-inline">
                    <input id="parking_garage" class="required" name="parking[]" type="checkbox" value="Garage" {{ in_array('Garage', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    Garage
                </label>
                <label for="parking_driveway" class="checkbox-inline">
                    <input id="parking_driveway" class="required" name="parking[]" type="checkbox" value="Driveway" {{ in_array('Driveway', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    Driveway
                </label>
                <label for="parking_gated" class="checkbox-inline">
                    <input id="parking_gated" class="required" name="parking[]" type="checkbox" value="Gated" {{ in_array('Gated', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    Gated
                </label>
                <label for="parking_off_street" class="checkbox-inline">
                    <input id="parking_off_street" class="required" name="parking[]" type="checkbox" value="Off Street" {{ in_array('Off Street', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    Off Street
                </label>
                <label for="parking_on_street" class="checkbox-inline">
                    <input id="parking_on_street" class="required" name="parking[]" type="checkbox" value="On Street" {{ in_array('On Street', old('parking', optional($property)->parking) ?: []) ? 'checked' : '' }}>
                    On Street
                </label>

                {!! $errors->first('parking', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('garden') ? 'has-error' : '' }}">
            <label for="garden" class="col-md-12 control-label">Garden</label>
            <div class="col-md-12">
                <label for="garden_back_garden" class="checkbox-inline">
                    <input id="garden_back_garden" class="required" name="garden[]" type="checkbox" value="Back Garden" {{ in_array('Back Garden', old('garden', optional($property)->garden) ?: []) ? 'checked' : '' }}>
                    Back Garden
                </label>
                <label for="garden_front_garden" class="checkbox-inline">
                    <input id="garden_front_garden" class="required" name="garden[]" type="checkbox" value="Front Garden" {{ in_array('Front Garden', old('garden', optional($property)->garden) ?: []) ? 'checked' : '' }}>
                    Front Garden
                </label>
                <label for="garden_communal_garden" class="checkbox-inline">
                    <input id="garden_communal_garden" class="required" name="garden[]" type="checkbox" value="Communal Garden" {{ in_array('Communal Garden', old('garden', optional($property)->garden) ?: []) ? 'checked' : '' }}>
                    Communal Garden
                </label>
                <label for="garden_terrace" class="checkbox-inline">
                    <input id="garden_terrace" class="required" name="garden[]" type="checkbox" value="Terrace" {{ in_array('Terrace', old('garden', optional($property)->garden) ?: []) ? 'checked' : '' }}>
                    Terrace
                </label>

                {!! $errors->first('garden', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('internal_area') ? 'has-error' : '' }}">
            <label for="internal_area" class="col-md-12 control-label">Internal Area</label>
            <div class="col-md-12">
                <input class="form-control" name="internal_area" type="number" id="internal_area" min="0" step="0.1" value="{{ old('internal_area', optional($property)->internal_area) }}" placeholder="Enter measurement of internal area here...">
                {!! $errors->first('internal_area', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('land_area') ? 'has-error' : '' }}">
            <label for="land_area" class="col-md-12 control-label">Land Area</label>
            <div class="col-md-12">
                <input class="form-control" name="land_area" type="number" id="land_area" min="0" step="0.1" value="{{ old('land_area', optional($property)->land_area) }}" placeholder="Enter measurement of land area here...">
                {!! $errors->first('land_area', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('area_unit') ? 'has-error' : '' }}">
            <label for="area_unit" class="col-md-12 control-label">Area Unit</label>
            <div class="col-md-12">
                <select class="form-control" id="area_unit" name="area_unit">
                        <option value="" style="display: none;" {{ old('area_unit', optional($property)->area_unit ?: '') == '' ? 'selected' : '' }} disabled selected>Enter area unit here...</option>
                    @foreach (['sq m' => 'sq m',
        'sq cm' => 'sq cm',
        'sq mm' => 'sq mm',
        'sq ft' => 'sq ft',
        'sq inch' => 'sq inch'] as $key => $text)
                        <option value="{{ $key }}" {{ old('area_unit', optional($property)->area_unit) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('area_unit', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input class="btn btn-org" type="submit" value="Update">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Price & Terms</h4><hr color="orange"/>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('saleprice') ? 'has-error' : '' }}">
            <label for="saleprice" class="col-md-12 control-label">Sale Price</label>
            <div class="col-md-12">
                <input class="form-control" name="saleprice" type="number" id="saleprice" value="{{ old('saleprice', optional($property)->saleprice) }}" min="0" max="2147483647" placeholder="Enter saleprice here...">
                {!! $errors->first('saleprice', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('letamount') ? 'has-error' : '' }}">
            <label for="letamount" class="col-md-12 control-label">Let Amont</label>
            <div class="col-md-12">
                <input class="form-control" name="letamount" type="number" id="letamount" value="{{ old('letamount', optional($property)->letamount) }}" min="0" max="2147483647" placeholder="Enter letamount here...">
                {!! $errors->first('letamount', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('price_flag') ? 'has-error' : '' }}">
            <label for="price_flag" class="col-md-12 control-label">Price Flag</label>
            <div class="col-md-12">
                <label for="price_flag_1" class="checkbox-inline">
                    <input id="price_flag_1" class="" name="price_flag" type="checkbox" value="1" {{ old('price_flag', optional($property)->price_flag) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('price_flag', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group {{ $errors->has('rent_frequency') ? 'has-error' : '' }}">
            <label for="rent_frequency" class="col-md-12 control-label">Rent Frequency</label>
            <div class="col-md-12">
                <select class="form-control" id="rent_frequency" name="rent_frequency">
                        
                    @foreach (['Weekly' => 'Weekly',
        'Monthly' => 'Monthly',
        'Quarter' => 'Quarter',
        'Half' => 'Half',
        'Annual' => 'Annual'] as $key => $text)
                        <option value="{{ $key }}" {{ old('rent_frequency', optional($property)->rent_frequency) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('rent_frequency', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('deposite') ? 'has-error' : '' }}">
            <label for="deposite" class="col-md-12 control-label">Deposite Minimum</label>
            <div class="col-md-12">
                <input class="form-control" name="deposite" type="number" id="deposite" value="{{ old('deposite', optional($property)->deposite) }}" min="0" max="2147483647" placeholder="Enter deposite here...">
                {!! $errors->first('deposite', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('deposite_flag') ? 'has-error' : '' }}">
            <label for="deposite_flag" class="col-md-12 control-label">Deposite Flag</label>
            <div class="col-md-12">
                <label for="deposite_flag_1" class="checkbox-inline">
                    <input id="deposite_flag_1" class="" name="deposite_flag" type="checkbox" value="1" {{ old('deposite_flag', optional($property)->deposite_flag) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('deposite_flag', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('admin_fee_max') ? 'has-error' : '' }}">
            <label for="admin_fee_max" class="col-md-12 control-label">Admin Fee Maxmimum</label>
            <div class="col-md-12">
                <input class="form-control" name="admin_fee_max" type="number" id="admin_fee_max" value="{{ old('admin_fee_max', optional($property)->admin_fee_max) }}" min="0" max="2147483647" placeholder="Enter admin fee maximum here...">
                {!! $errors->first('admin_fee_max', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('admin_fee_exe') ? 'has-error' : '' }}">
            <label for="admin_fee_exe" class="col-md-12 control-label">Admin Fee Exemption</label>
            <div class="col-md-12">
                <input class="form-control" name="admin_fee_exe" type="number" id="admin_fee_exe" value="{{ old('admin_fee_exe', optional($property)->admin_fee_exe) }}" min="0" max="2147483647" placeholder="Enter admin fee exemption here...">
                {!! $errors->first('admin_fee_exe', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('admin_fee_flag') ? 'has-error' : '' }}">
            <label for="admin_fee_flag" class="col-md-12 control-label">Admin Fee Flag</label>
            <div class="col-md-12">
                <label for="admin_fee_flag_1" class="checkbox-inline">
                    <input id="admin_fee_flag_1" class="" name="admin_fee_flag" type="checkbox" value="1" {{ old('admin_fee_flag', optional($property)->admin_fee_flag) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('admin_fee_flag', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input class="btn btn-org" type="submit" value="Update">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Other Terms</h4><hr color="orange"/>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_intake') ? 'has-error' : '' }}">
            <label for="date_intake" class="col-md-12 control-label">date Intake</label>
            <div class="col-md-12">
                <input class="form-control" name="date_intake" type="date" id="date_intake" value="{{ old('date_intake', optional($property)->date_intake) }}" placeholder="Enter date intake here...">
                {!! $errors->first('date_intake', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_published') ? 'has-error' : '' }}">
            <label for="date_published" class="col-md-12 control-label">date Published</label>
            <div class="col-md-12">
                <input class="form-control" name="date_published" type="date" id="date_published" value="{{ old('date_published', optional($property)->date_published) }}" placeholder="Enter date published here...">
                {!! $errors->first('date_published', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_revoked') ? 'has-error' : '' }}">
            <label for="date_revoked" class="col-md-12 control-label">date Revoked</label>
            <div class="col-md-12">
                <input class="form-control" name="date_revoked" type="date" id="date_revoked" value="{{ old('date_revoked', optional($property)->date_revoked) }}" placeholder="Enter date revoked here...">
                {!! $errors->first('date_revoked', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-5">
        {{--<div class="form-group {{ $errors->has('further_details') ? 'has-error' : '' }}">
            <label for="further_details" class="col-md-12 control-label">Further Details</label>
            <div class="col-md-12">
                <input class="form-control" name="further_details" type="text" id="further_details" value="{{ old('further_details', optional($property)->further_details) }}" minlength="1" placeholder="Enter property details here...">
                {!! $errors->first('further_details', '<p class="help-block">:message</p>') !!}
            </div>
        </div>--}}
        <div class="form-group table-responsive">
            <label for="further_details" class="col-md-10 control-label">Further Details</label><a class="btn-sm btn-success" onclick="addprodis();"><i class="fa fa-plus"></i></a>
            <table id="faqpdis" class="table table-borderless">
                <tbody>
                    @if( isset(optional($property)->further_details))
                        @foreach(optional($property)->further_details as $key)
                        <tr>
                            <td>
                                <input class="form-control" name="further_details[]" type="text" id="further_details" value="{{ $key }}" placeholder="Enter further details here...">
                                {!! $errors->first('further_details', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger" onclick="SomeDeleteRowFunction()"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>
                                <input class="form-control" name="further_details[]" type="text" id="further_details" value="{{ old('further_details') }}" placeholder="Enter further details here...">
                                {!! $errors->first('further_details', '<p class="help-block">:message</p>') !!}
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group {{ $errors->has('property_details') ? 'has-error' : '' }}">
            <label for="property_details" class="col-md-12 control-label">Property Details</label>
            <div class="col-md-12">
                <textarea class="form-control" name="property_details" cols="50" rows="5" id="property_details" minlength="1" placeholder="Enter property details here...">{{ old('property_details', optional($property)->property_details) }}</textarea>
                {!! $errors->first('property_details', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('property_details_display') ? 'has-error' : '' }}">
            <label for="property_details_display" class="col-md-12 control-label">Property Details Display</label>
            <div class="col-md-12">
                <div class="checkbox">
                    <label for="property_details_display_1">
                        <input id="property_details_display_1" class="" name="property_details_display" type="checkbox" value="1" {{ old('property_details_display', optional($property)->property_details_display) == '1' ? 'checked' : '' }}>
                        Yes
                    </label>
                </div>

                {!! $errors->first('property_details_display', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('owner') ? 'has-error' : '' }}">
            <label for="owner" class="col-md-12 control-label">Owner</label>
            <div class="col-md-12">
                <select class="form-control" id="owner" name="owner">
                        <option value=""{{ old('owner', optional($property)->owner ?: '') == '' ? 'selected' : '' }} disabled selected>Enter owner here...</option>
                    @foreach ($owners as $key => $owner)
                        <option value="{{ $key }}" {{ old('owner', optional($property)->owner) == $key ? 'selected' : '' }}>
                            {{ $owner }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('owner', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_complete') ? 'has-error' : '' }}">
            <label for="is_complete" class="col-md-12 control-label">Complete</label>
            <div class="col-md-12">
                <label for="is_complete_1" class="checkbox-inline">
                    <input id="is_complete_1" class="" name="is_complete" type="checkbox" value="1" {{ old('is_complete', optional($property)->is_complete) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_complete', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_publish') ? 'has-error' : '' }}">
            <label for="is_publish" class="col-md-12 control-label">Is Publish</label>
            <div class="col-md-12">
                <label for="is_publish_1" class="checkbox-inline">
                    <input id="is_publish_1" class="" name="is_publish" type="checkbox" value="1" {{ old('is_publish', optional($property)->is_publish) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_publish', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_sold') ? 'has-error' : '' }}">
            <label for="is_sold" class="col-md-12 control-label">Sold?</label>
            <div class="col-md-12">
                <label for="is_sold_1" class="checkbox-inline">
                    <input id="is_sold_1" class="" name="is_sold" type="checkbox" value="1" {{ old('is_sold', optional($property)->is_sold) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_sold', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('is_let') ? 'has-error' : '' }}">
            <label for="is_let" class="col-md-12 control-label">Let?</label>
            <div class="col-md-12">
                <label for="is_let_1" class="checkbox-inline">
                    <input id="is_let_1" class="" name="is_let" type="checkbox" value="1" {{ old('is_let', optional($property)->is_let) == '1' ? 'checked' : '' }}>
                    Yes
                </label>

                {!! $errors->first('is_let', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

</div>

<script>
    var faqs_row = 0;
    function addsale(){
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td><input class="form-control" name="sale_condition[]" type="text" id="sale_condition" placeholder="Enter sale condition here..."></td>';
        html += '<td><a href="javascript:void(0)" class="btn-sm btn-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';
    $('#faqs tbody').append(html);

    faqs_row++;
    }
</script>

<script>
    var faqr_row = 0;
    function addrent(){
        html = '<tr id="faqr-row' + faqr_row + '">';
        html += '<td><input class="form-control" name="rent_condition[]" type="text" id="rent_condition" placeholder="Enter Rent condition here..."></td>';
        html += '<td><a href="javascript:void(0)" class="btn-sm btn-danger" onclick="$(\'#faqr-row' + faqr_row + '\').remove();"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';
    $('#faqr tbody').append(html);

    faqr_row++;
    }
</script>

<script>
    var faqpd_row = 0;
    function addprode(){
        html = '<tr id="faqpd-row' + faqpd_row + '">';
        html += '<td><input class="form-control" name="property_details[]" type="text" id="property_details" placeholder="Enter property details here..."></td>';
        html += '<td><a href="javascript:void(0)" class="btn-sm btn-danger" onclick="$(\'#faqpd-row' + faqpd_row + '\').remove();"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';
    $('#faqpd tbody').append(html);

    faqpd_row++;
    }
</script>

<script>
    var faqpdis_row = 0;
    function addprodis(){
        html = '<tr id="faqpdis-row' + faqpdis_row + '">';
        html += '<td><input class="form-control" name="further_details[]" type="text" id="further_details" placeholder="Enter further details here..."></td>';
        html += '<td><a href="javascript:void(0)" class="btn-sm btn-danger" onclick="$(\'#faqpdis-row' + faqpdis_row + '\').remove();"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';
    $('#faqpdis tbody').append(html);

    faqpdis_row++;
    }
</script>

<script>
function SomeDeleteRowFunction() {
    $('table').on('click', 'a', function(e){
        $(this).closest('tr').remove()
    })
}
</script>
