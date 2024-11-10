<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

function configErr(string $key): mixed
{
    if (!Config::has($key)) {
        if (!App::isProduction()) {
            throw new Exception("Given config key not found: {$key}");
        } else {
            Log::error("Given config key not found: {$key}");
        }
    }

    if (!Config::get($key)) {
        if (!App::isProduction()) {
            throw new Exception("No value found for config key: {$key}");
        } else {
            Log::error("No value found for config key: {$key}");
        }
    }

    return config($key);
}
