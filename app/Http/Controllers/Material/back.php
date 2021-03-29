<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material\Material;
use App\Models\Material\InspectStandard;
use App\Models\Material\MaterialInOut;
use Illuminate\Http\Request;

class InspectStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $test = '';
    protected $standard;
    protected $material;

    public function index()
    {
        return view('material.inspect.standard.index')
            ->with('materials', MaterialInOut::with('material')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $standard = new InspectStandard();

        $standard->title = $request->input('title');
        $standard->material_code = $request->input('material-code');
        $standard->weight_use = $request->input('weight-use');
        $standard->length_use = $request->input('length-use');
        $standard->eye_use = $request->input('eye-use');

        return $standard->save();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return InspectStandard::where('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return InspectStandard::where('id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest()
    {
        return Material::all();
    }


    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequestStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'model_code' => 'required|email',
                'address' => 'required',
            ]
        );

        if ($validator->passes()) {
            // Store Data in DATABASE from HERE

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()]);
    }

}
