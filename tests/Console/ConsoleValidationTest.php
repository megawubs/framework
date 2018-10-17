<?php

namespace Illuminate\Tests\Console;


use Illuminate\Console\Command;
use PHPUnit\Framework\TestCase;

class ConsoleValidationTest extends Testcase
{
    
}

class ConsoleCommandValidationStub extends Command
{

    protected $signature = 'validation:stub {name}';

    public function handle()
    {
        return 'handle';
    }

    public function rules()
    {
        return [
            'name' => [
                'required'
            ]
        ];
    }
}
