<?php

namespace App\Http\Controllers;

use App\Models\Vlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VlistsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Vlists::active()->paginate(10)->toArray());
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'list_id' => 'required',
        ]);

        if ($validation->fails()) {

            return response()->json(['message' => $validation->messages()->first()], 422);

        } else {

            $data = $request->all();

            $lists = Vlists::create($data);
            return response()->json(['response' => 'success', 'message' => 'Lists Created', 'data' => $lists]);
        }
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        //
    }


    /**
     * @param $id
     */
    public function edit($id)
    {
        //
    }


    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * @param $id
     */
    public function destroy($id)
    {
        //
    }
}
