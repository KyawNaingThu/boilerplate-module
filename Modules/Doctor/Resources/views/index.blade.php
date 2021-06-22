@extends('backend.layouts.app')

@section('title', __('Doctor Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Doctor Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.doctor.create')"
                :text="__('Create Doctor')"
            />
        </x-slot>

        <x-slot name="body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </x-slot>
    </x-backend.card>
    
   
@endsection
@push('after-scripts')
<script>
    $(document).ready(function() {        
        $('#example').DataTable();
    } );
</script>
@endpush