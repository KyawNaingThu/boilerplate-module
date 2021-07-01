@extends ('backend.layouts.app')

@section ('title', appName() . ' | ' . __('appsetting::labels.backend.appsetting.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('appsetting::labels.backend.appsetting.management') }}
            </div><!--col-->

        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#basic_setting" role="tab" aria-controls="basic_setting" aria-selected="true">
                        <i class="icon-settings"></i>{{ __('appsetting::labels.backend.appsetting.basic.basic_setting') }}</a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="basic_setting" role="tabpanel">
                        
                        <x-forms.post :action="route('admin.appsetting.store')" class="form-horizontal" enctype="multipart/form-data">
                            
                            <input type="hidden" name="tab" value="basic">

                            <div class="form-group row {{ $errors->has('main_logo') ? ' has-error' : '' }}">
                                
                                <label for="main_logo" class="col-md-3 form-control-label">{{ __('appsetting::labels.backend.appsetting.basic.main_logo')}}</label>
                                
                                <div class="col-md-9">
                                    <input type="file" value="{{ config('appsetting.basic.main_logo') }}" id="main_logo" name="main_logo" class="form-control"><br>
                                    @if(config('appsetting.basic.main_logo'))
                                        <img src="{{ config('appsetting.basic.main_logo') }}" class="thumbnail"  style="width: 200px; height: 150px;">
                                    @endif
                                </div>
                            </div><br><br>
                                                                                

                            <div class="form-group row form-md-line-input">
                            
                                
                                <label for="app_name" class="col-md-3 form-control-label">{{ __('appsetting::labels.backend.appsetting.basic.app_name')}}</label>

                                <div class="col-md-9">
                                    <input type="text" value="{{ $appSetting['app_name'] }}" id="app_name" name="app_name" class="form-control"><br>
                                    
                                </div>
                            </div>

                            <div class="form-group row form-md-line-input">
                                
                                <label for="app_email" class="col-md-3 form-control-label">{{ __('appsetting::labels.backend.appsetting.basic.app_email')}}</label>

                                <div class="col-md-9">
                                    <input type="text" value="{{ $appSetting['app_email'] }}" id="app_email" name="app_email" class="form-control"><br>
                                    
                                </div>
                            </div>

                            <div class="form-group row form-md-line-input">
                                
                                <label for="phone_number" class="col-md-3 form-control-label">{{ __('appsetting::labels.backend.appsetting.basic.phone_number')}}</label>

                                <div class="col-md-9">                                    
                                    <input type="text" value="{{ $appSetting['app_phone'] }}" id="app_phone" name="app_phone" class="form-control"><br>

                                </div>
                            </div>

                            <div class="form-group row form-md-line-input">

                                <label for="app_address" class="col-md-3 form-control-label">{{ __('appsetting::labels.backend.appsetting.basic.address')}}</label>

                                <div class="col-md-9">                                    
                                    <input type="text" value="{{ $appSetting['app_address'] }}" id="app_address" name="app_address" class="form-control"><br>

                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update')</button>
                                    </div><!--row-->
                                </div><!--row-->
                            </div><!--card-footer-->

                        </x-forms.post>
                    </div>
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection