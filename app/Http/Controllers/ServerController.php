<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Server;

class ServerController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Server::active()->paginate(10)->toArray());
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
     * @param Server $server
     */
    public function show(Server $server)
    {
        //
    }

    /**
     * @param Server $server
     */
    public function edit(Server $server)
    {
        //
    }

    /**
     * @param Request $request
     * @param Server $server
     */
    public function update(Request $request, Server $server)
    {
        //
    }

    /**
     * @param Server $server
     */
    public function destroy(Server $server)
    {
        //
    }
}
