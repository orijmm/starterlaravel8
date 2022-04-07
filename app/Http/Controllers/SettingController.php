<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Nnjeim\World\World;

class SettingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action =  World::countries();

        if ($action->success) {

            $countries = $action->data;
        }

        return $this->sendResponse($countries, 'contries retrieved successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        if (is_null($setting)) {
            return $this->sendError('setting not found.');
        }

        return $this->sendResponse($setting, 'setting retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name_company' => 'required',
            'description' => 'required',
            'country' => 'required',
            'email' => 'required',
            'locale' => 'required',
            'timezone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $setting->update($input);

        return $this->sendResponse($setting, 'setting updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
