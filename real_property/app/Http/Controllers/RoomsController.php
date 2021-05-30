<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Exception;

class RoomsController extends Controller
{

    /**
     * Display a listing of the rooms.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rooms = Room::paginate(25);

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new room.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rooms.create');
    }

    /**
     * Store a new room in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Room::create($data);

            return redirect()->route('rooms.room.index')
                ->with('success_message', 'Room was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified room.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);

        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified room.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        

        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified room in the storage.
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
            
            $room = Room::findOrFail($id);
            $room->update($data);

            return redirect()->route('rooms.room.index')
                ->with('success_message', 'Room was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified room from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $room = Room::findOrFail($id);
            $room->delete();

            return redirect()->route('rooms.room.index')
                ->with('success_message', 'Room was successfully deleted.');
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
                'room_name' => 'string|min:1|nullable',
            'room_length' => 'nullable|numeric',
            'room_width' => 'nullable|numeric',
            'room_dimention_unit' => 'string|min:1|nullable',
            'room_dimention_display' => 'string|min:1|nullable',
            'room_area_unit' => 'string|min:1|nullable',
            'property_id' => 'required', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
