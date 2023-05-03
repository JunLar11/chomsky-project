<?php

namespace App\Providers;

use Chomsky\Providers\ServiceProvider;
use Chomsky\Validation\Rule;

class RuleServiceProvider implements ServiceProvider
{
    public function registerServices(){
        Rule::loadDefaultRules();
    }
}
