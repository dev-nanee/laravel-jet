<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material\Material;
use App\Models\Material\InspectStandard;
use App\Models\Material\InOut;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
    protected $ths = ['No','품목분류', '품번', '품목명', 'COLOR', '모델'];
    protected $tds = ['type', 'code', 'name', 'color', 'model_code'];
    protected $dataAttributes = ['id'];

    public function index(Request $request)
    {
//        var_dump($request->query());
//        dd($request->fullUrl());
//        dd($request->query());        echo $request->query('model-code');
        $materials = Material::query();
        if( $request->type ){
            $materials->where('type', $request->type )
            ->where('model_code', $request->query('model-code'));
        }
        $materials = $materials->orderBy('name','asc')->paginate(3);
        return Inertia::render('Material/Inspect/Standard/Index', [
            'ths' => $this->ths,
            'tds' => $this->tds,
            'dataAttributes' => $this->dataAttributes,
            'infos' => $materials->items(),
            'paginator' => $materials
        ]);
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

        $standard->title = $request->title;
        $standard->material_id = $request->input('material-code');
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

        return InspectStandard::where('material_id', $id)->orderBy('created_at', 'desc')->get();
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
