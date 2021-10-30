<?php

namespace Aminetiyal\LaravelReusableActions;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aminetiyal\LaravelReusableActions\LaravelReusableActions
 */
class LaravelReusableActionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-reusable-actions';
    }
}
