<?php

namespace Modules\AppSetting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\AppSetting\Http\Requests\CreateAppSettingRequest;
use Modules\AppSetting\Repositories\AppSettingRepository;
class AppSettingController extends Controller
{
 /**
     * @var AppSettingRepository
     * @var CategoryRepository
     */
    protected $appsetting;

    /**
     * @param AppSettingRepository $appsetting
     */
    public function __construct(AppSettingRepository $appsetting)
    {
        $this->appsetting = $appsetting;
       
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $app_setting = [
            'app_name' => config('appsetting.basic.name'),
            'app_email' => config('appsetting.basic.email'),
            'app_address' => config('appsetting.basic.address'),
            'app_phone' => config('appsetting.basic.phone'),
            'main_logo' => config('appsetting.basic.main_logo')
        ];
        return view('appsetting::index')->withAppSetting($app_setting);
    }

     /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateAppSettingRequest $request)
    {
        $result = $this->appsetting->update($request);
        if ($result) {
            return redirect()->route('admin.appsetting.index')->withFlashSuccess(trans('appsetting::alerts.backend.appsetting.updated'));
       
            } else {
            return redirect()->route('admin.appsetting.index')->withFlashDanger(trans('appsetting::alerts.backend.appsetting.updated_error'));
        }
    }
}
