<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserGroupController extends Controller

{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Group::all()], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'group_name' => 'required'
        ]);

        if ($validation->fails()) {

            return response()->json(['message' => $validation->messages()->first()], 422);

        } else {

            $data = $request->all();
            $groups = Group::create($data);
            return response()->json(['response' => 'success', 'message' => 'Group Created', 'data' => $groups]);
        }
    }

}
