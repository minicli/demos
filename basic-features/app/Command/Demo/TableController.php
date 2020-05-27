<?php


namespace App\Basic\Command\Demo;

use Minicli\Command\CommandController;

class TableController extends CommandController
{
    public function handle()
    {
        $printer = $this->getPrinter();
        $printer->info("Simple Table Demo using printTable()");

        $mytable = [
            [ 'Some Content', 'Quantity', 'Size', 'Enabled' ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],
            [ 'more content', rand(20,100), rand(500,1000) . 'GB', rand(0,1) ],

        ];

        $printer->printTable($mytable);
        $printer->newline();
    }
}