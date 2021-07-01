<?php

namespace Modules\AppSetting\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\File;

/**
 * Class AppSettingRepository.
 */
class AppSettingRepository extends BaseRepository
{
    public function update($request)
    {
        $tab = $request->tab;
        $data = $request->except('_token', '_method', 'tab', 'filename');      
        $path = base_path('.env');

        if ($tab == 'basic') {
            
            $mainLogoUrl =  config('appsetting.basic.main_logo');
            if ($request->hasFile('main_logo')) {
                $file = $request->file('main_logo');
                $logoName = 'main_logo.'.$file->extension();
                $mainLogo = explode("/", $mainLogoUrl);
                \File::delete('app_data/'. end($mainLogo));
                //$file->move(base_path('app_data/'), $logoName);
                $file->move('app_data/', $logoName);
                $data['main_logo'] =  url('app_data/'.$logoName);
            }
            
            $defaults = [
                config('appsetting.basic.name'),
                config('appsetting.basic.email'),
                config('appsetting.basic.phone'),
                config('appsetting.basic.address'),                
                $mainLogoUrl,
              ];
            
        }

        $content = File::get($path);
        // replace default values with new ones
        $i = 0;

        // print('<pre>');
        // print_r($defaults);
        // print('<hr>');
        // dd($data);

        foreach ($data as $key => $value) {
            $content = str_replace(strtoupper($key).'="'.$defaults[$i].'"', strtoupper($key).'="'.$value.'"', $content);
            if (strpos($content, strtoupper($key).'="'.$value.'"')  === false) {
                // dd($content,$key,$value);
                return false;
            }

            $i++;
        }

        if (file_exists($path)) {
            File::put($path, $content);
        }
        return true;
    }
    
}
