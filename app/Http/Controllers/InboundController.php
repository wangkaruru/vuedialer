<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InboundController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Inbound::active()->paginate(10)->toArray());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // perform validation if need be as below

        $validation = Validator::make($request->all(), [
            'group_id' => 'required',
            'group_name' => 'required'
        ]);

        if ($validation->fails()) {

            return response()->json(['message' => $validation->messages()->first()], 422);

        } else {

            $data = $request->all();
            $inbound = Inbound::create($data);
            return response()->json(['response' => 'success', 'message' => 'Inbound Created', 'data' => $inbound]);
        }
    }

}

