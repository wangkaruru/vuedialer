<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScriptController extends Controller

{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Script::active()->paginate(10)->toArray());
    }

    /**
     * @param $script_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($script_id)
    {
        $script = Script::findOrFail($script_id);
        return response()->json(['data' => $script], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'script_id' => 'required',
            'script_name' => 'required'
        ]);

        if ($validation->fails()) {

            return response()->json(['message' => $validation->messages()->first()], 422);

        } else {

            $data = $request->all();
            $script = Script::create($data);
            return response()->json(['response' => 'success', 'message' => 'Inbound Created', 'data' => $script]);
        }
    }


    /**
     * @param $script_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($script_id)
    {
        try {

            $script = Script::findOrFail($script_id);
            $script->delete();

            return response()->json(['response' => 'success', 'message' => 'Campaign Deleted']);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage()], 422);
        }
    }

}
