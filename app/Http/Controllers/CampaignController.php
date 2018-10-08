<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Campaign::active()->paginate(10)->toArray());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //TODO: add validation here please
        try {

            $campaign = Campaign::create([
                'campaign_id' => $request->campaign_id,
                'campaign_name' => $request->campaign_name,
                // 'admin_user_group'=>$request['admin_user_group'],cant find the column name
                'campaign_description' => $request->campaign_description,
                'active' => $request->active,
                //'park_music_on_hold'=> $request['user_group'],,cant find the column name
                'allow_closers' => $request->allow_closers,
                //  'minimum_hopper_level'=>$request['minimum_hopper_level'],,cant find the column name
                'auto_dial_level' => $request->auto_dial_level,
                // 'next_agent_call'=>$request['next_agent_call'],
                'local_call_time' => $request->local_call_time,
                'voicemail_ext' => $request->voicemail_ext,
                //   'script'=>$request['script'],cant find the column name
                'get_call_launch' => $request->get_call_launch

            ]);

            return response()->json(['message' => 'Campaign added!', 'data' => $campaign]);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage()], 422);
        }
    }

    /**
     * @param $campaign_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($campaign_id)
    {
        $campaign = Campaign::findOrFail($campaign_id);

        return response()->json(['response' => 'success', 'campaign' => $campaign]);
    }


    /**
     * @param Campaign $campaign
     */
    public function edit(Campaign $campaign)
    {
        //
    }


    /**
     * @param Request $request
     * @param $campaign_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $campaign_id)
    {
        $campaign = Campaign::findOrFail($campaign_id)->update($request->all());

        return response()->json(['response' => 'success', 'message' => 'Campaign Updated', 'data' => $campaign]);
    }

    /**
     * @param $campaign_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($campaign_id)
    {
        try {

            $campaign = Campaign::findOrFail($campaign_id);
            $campaign->delete();

            return response()->json(['response' => 'success', 'message' => 'Campaign Deleted']);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
}