<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\PropartyType;
use App\Models\Property;
use Illuminate\Http\Request;
use Exception;

class PropertiesController extends Controller
{

    /**
     * Display a listing of the properties.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $properties = Property::with('propertytype','owner')->paginate(25);
        $sale_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->count();
        $rent_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->count();
        $sold_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_sold', 1)->orderBy('updated_at', 'desc')->count();
        $let_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_let', 1)->orderBy('updated_at', 'desc')->count();
        //dd($sale_properties);
        return view('properties.index', compact('properties', 'sale_properties', 'rent_properties', 'sold_properties', 'let_properties'));
    }

    /**
     * Display a listing of the proparties.
     *
     * @return Illuminate\View\View
     */
    public function search(Request $request)
    {
        $search =  $request->input('search_pro');
        if($search!=""){
            $properties = Property::with('propertytype')->where(function ($query) use ($search){
                $query->where('catagery', 'like', '%'.$search.'%')
                    ->orWhere('age', '=', $search)
                    ->orWhere('first_postcode', 'like', '%'.$search.'%')
                    ->orWhere('second_postcode', 'like', '%'.$search.'%')
                    ->orWhere('post_town', 'like', '%'.$search.'%')
                    ->orWhere('post_city', 'like', '%'.$search.'%')
                    ->orWhere('post_country', 'like', '%'.$search.'%')
                    ->orWhere('heating_type', 'like', '%'.$search.'%');
            })
            ->paginate(5)->appends(request()->query());
            $properties->appends(['search_pro' => $search]);
        }
        else{
            $properties = Property::with('propertytype')->paginate(10);
        }

        $sale_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->count();
        $rent_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->count();
        $sold_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_sold', 1)->orderBy('updated_at', 'desc')->count();
        $let_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_let', 1)->orderBy('updated_at', 'desc')->count();

        return View('properties.index', compact('properties', 'sale_properties', 'rent_properties', 'sold_properties', 'let_properties'));

        //$proparties = Proparty::with('propertytype')->paginate(25);

        //return view('proparties.index', compact('proparties'));
    }

    public function uncompletesearch(Request $request)
    {
        $search =  $request->input('search_pro');
        if($search == 'uncomplete')
        {
            $properties = Property::with('propertytype')->where('is_complete', '=', 0)->paginate(5)->appends(request()->query());
        }

        if($search == 'unpublish')
        {
            $properties = Property::with('propertytype')->where('is_publish', '=', 0)->paginate(5)->appends(request()->query());
        }

        if($search == 'sold')
        {
            $properties = Property::with('propertytype')->where('is_sold', '=', 1)->paginate(5)->appends(request()->query());
        }

        if($search == 'let')
        {
            $properties = Property::with('propertytype')->where('is_let', '=', 1)->paginate(5)->appends(request()->query());
        }

        if($search == 'for sale')
        {
            $properties = Property::with('propertytype')->where('catagery', 'for sale')->paginate(5)->appends(request()->query());
        }

        if($search == 'for let')
        {
            $properties = Property::with('propertytype')->where('catagery', 'for let')->paginate(5)->appends(request()->query());
        }

        if($search == 'for shared')
        {
            $properties = Property::with('propertytype')->where('catagery', 'for shared')->paginate(5)->appends(request()->query());
        }

        $sale_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->count();
        $rent_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->count();
        $sold_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_sold', 1)->orderBy('updated_at', 'desc')->count();
        $let_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_let', 1)->orderBy('updated_at', 'desc')->count();

        return View('properties.index', compact('properties', 'sale_properties', 'rent_properties', 'sold_properties', 'let_properties'));
    }

    /**
     * Show the form for creating a new property.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        $owners = Owner::pluck('name','id')->all();
        
        return view('properties.create', compact('propertytypes','owners'));
    }

    /**
     * Store a new property in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Property::create($data);

            return redirect()->route('properties.property.index')
                ->with('success_message', 'Property was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified property.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $property = Property::with('propertytype','owner')->findOrFail($id);

        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified property.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
$owners = Owner::pluck('name','id')->all();

        return view('properties.edit', compact('property','propertytypes','owners'));
    }

    /**
     * Update the specified property in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $property = Property::findOrFail($id);
            $property->update($data);

            return redirect()->route('properties.property.index')
                ->with('success_message', 'Property was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified property from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $property = Property::findOrFail($id);
            $property->delete();

            return redirect()->route('properties.property.index')
                ->with('success_message', 'Property was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'catagery' => 'string|nullable',
            'type' => 'nullable',
            'age' => 'string|nullable',
            'minimum_term' => 'string|nullable',
            'door_no' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'door_name' => 'string|min:1|nullable',
            'first_postcode' => 'string|nullable|min:0',
            'second_postcode' => 'string|nullable|min:0',
            'street_name' => 'string|nullable|min:0',
            'second_line_of_address' => 'string|nullable|min:0',
            'post_town' => 'string|min:1|nullable',
            'post_city' => 'string|min:1|nullable',
            'post_country' => 'string|min:1|nullable',
            'display_address_line1' => 'string|min:1|nullable',
            'display_address_line2' => 'string|min:1|nullable',
            'display_address' => 'boolean|nullable',
            'condition_of_property' => 'string|nullable',
            'condition_furnished' => 'string|nullable',
            'access_type' => 'string|nullable',
            'heating_type' => 'string|nullable',
            'bill' => 'string|nullable',
            'is_burglar_alarm' => 'boolean|nullable',
            'is_cctv' => 'boolean|nullable',
            'is_swimmingpool' => 'boolean|nullable',
            'enquiry_contact' => 'string|min:1|nullable',
            'enquiry_email' => 'email|min:1|nullable',
            'sale_condition' => 'array|min:1|nullable',
            'rent_condition' => 'array|min:1|nullable',
            'bedrooms' => 'nullable|numeric|min:0|max:10',
            'bathrooms' => 'nullable|numeric|min:0|max:10',
            'halls' => 'nullable|numeric|min:0|max:10',
            'reseptions' => 'nullable|numeric|min:-0|max:10',
            'floors' => 'nullable|numeric|min:-0|max:100',
            'parking' => 'array|nullable',
            'garden' => 'array|nullable',
            'internal_area' => 'nullable|numeric',
            'land_area' => 'nullable|numeric',
            'area_unit' => 'string|min:1|nullable',
            'saleprice' => 'nullable|numeric|min:0|max:2147483647',
            'letamount' => 'nullable|numeric|min:0|max:2147483647',
            'price_flag' => 'boolean|nullable',
            'rent_frequency' => 'string|nullable',
            'deposite' => 'nullable|numeric|min:0|max:2147483647',
            'deposite_flag' => 'boolean|nullable',
            'admin_fee_max' => 'nullable|numeric|min:0|max:2147483647',
            'admin_fee_exe' => 'nullable|numeric|min:0|max:2147483647',
            'admin_fee_flag' => 'boolean|nullable',
            'date_intake' => 'nullable',
            'date_published' => 'nullable',
            'date_revoked' => 'nullable',
            'further_details' => 'array|min:1|nullable',
            'property_details' => 'string|min:1|nullable',
            'property_details_display' => 'boolean|nullable',
            'owner' => 'nullable',
            'is_complete' => 'boolean|nullable',
            'is_publish' => 'boolean|nullable',
            'is_sold' => 'boolean|nullable',
            'is_let' => 'boolean|nullable', 
        ];

        
        $data = $request->validate($rules);


        $data['display_address'] = $request->has('display_address');
        $data['is_burglar_alarm'] = $request->has('is_burglar_alarm');
        $data['is_cctv'] = $request->has('is_cctv');
        $data['is_swimmingpool'] = $request->has('is_swimmingpool');
        $data['price_flag'] = $request->has('price_flag');
        $data['deposite_flag'] = $request->has('deposite_flag');
        $data['admin_fee_flag'] = $request->has('admin_fee_flag');
        $data['property_details_display'] = $request->has('property_details_display');
        $data['is_complete'] = $request->has('is_complete');
        $data['is_publish'] = $request->has('is_publish');
        $data['is_sold'] = $request->has('is_sold');
        $data['is_let'] = $request->has('is_let');


        return $data;
    }

}
