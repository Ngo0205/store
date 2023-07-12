<?php
function getConfigValueFormTableSetting($configKey){

    $setting = \App\Models\Setting::where('config_key', $configKey)->first();

    if(!empty($setting)){
        return $setting->config_value;
    }
    else return null;
}
