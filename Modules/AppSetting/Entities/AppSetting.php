<?php

namespace Modules\AppSetting\Entities;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appsetting';

    protected $fillable = ["id"];

       /**
     * @return string
     */
    public function getShowButtonAttribute()
    {
    	if(auth()->user()->can('admin.access.appsetting.view')){
        	return '<a href="'.route('admin.appsetting.show', $this).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.view').'" class="btn btn-info"><i class="fas fa-eye"></i></a>';
        }
       	return '';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
    	if(auth()->user()->can('admin.access.appsetting.edit')){
        	return '<a href="'.route('admin.appsetting.edit', $this).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'" class="btn btn-primary"><i class="fas fa-edit"></i></a>';
        }
       	return '';
    }

     /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if (auth()->user()->can('admin.access.appsetting.delete')) {
            return '<a href="'.route('admin.appsetting.destroy', $this).'" data-method="delete"
                 data-trans-button-cancel="'.__('buttons.general.cancel').'"
                 data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
                 data-trans-title="'.__('strings.backend.general.are_you_sure').'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.delete').'" class="btn btn-danger"><i class="fas fa-trash"></i></a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
            return $this->getShowButtonAttribute().$this->getEditButtonAttribute().$this->getDeleteButtonAttribute();
    }
}
