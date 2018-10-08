<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(User::active()->paginate(10)->toArray());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //TODO: add validation
        try {

            $user = User::create([
                'user_number' => $request->user,
                'password' => $request->pass,
                'full_name' => $request->full_name,
                'user_level' => $request->user_level,
                'user_group' => $request->user_group,
                'phone_login' => $request->phone_login,
                'phone_pass' => $request->phone_pass
            ]);

            return response()->json(['message' => 'User added!', 'data' => $user]);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage()], 422);
        }
    }

    /**
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($user_id)
    {
        $user = User::findOrFail($user_id);

        return response()->json(['response' => 'success', 'user' => $user]);
    }


    /**
     * @param Request $request
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id)->update($request->all());
        return response()->json(['response' => 'success', 'message' => 'User Updated', 'data' => $user]);
    }


    /**
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($user_id)
    {
        try {

            User::findOrFail($user_id)->delete();

            return response()->json(['response' => 'success', 'message' => 'User Deleted']);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
}
