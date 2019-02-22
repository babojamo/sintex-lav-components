<?php

namespace Sintex\Preset;

use Sintex\Helper\DirectoryHelper;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class SintexPreset extends LaravelPreset
{
    public static function install()
    {
        static::updateBaseLayout();
        //static::updateMix();
        //static::updateScripts();
        //static::updateStyles();
    }

    public static function updateBaseLayout()
    {
        DirectoryHelper::recursive_copy(__DIR__.'/stubs/views/base-layouts', base_path('resources/views/base-layouts'));
    }
}