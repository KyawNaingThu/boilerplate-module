@extends('backend.layouts.app')

@section('title', __('Create doctor'))

@section('content')
    <x-forms.post :action="route('admin.doctor.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create doctor')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.doctor.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
              
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Name')</label>

                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>

         
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create doctor')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection