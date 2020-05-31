<?php namespace PlanetaDelEste\JWTAuth\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'planetadeleste_jwtauth_settings';

    public $settingsFields = 'fields.yaml';
}
