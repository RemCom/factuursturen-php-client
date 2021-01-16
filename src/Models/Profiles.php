<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;

/**
 * Class Profiles
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Profiles extends Model
{

    use FindAll;

    /**
     * @var string[]
     */
    protected $fillable = [];

    /**
     * @var string
     */
    protected $url = 'profiles';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'profile',
        'plural' => 'profiles'
    ];
}
