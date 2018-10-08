<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Phone::active()->paginate(10)->toArray());
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
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param Request $request
     */
    public function show(Request $request)
    {

    }

    /**
     * @param Phone $phone
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * @param Request $request
     * @param Phone $phone
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * @param Phone $phone
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
