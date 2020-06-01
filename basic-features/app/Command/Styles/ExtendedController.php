<?php


namespace App\Basic\Command\Styles;

use Minicli\Command\CommandController;

class ExtendedController extends CommandController
{
    /**
     * Demonstrates how to use extended styles with the `out` method
     */
    public function handle()
    {
        $printer = $this->getPrinter();

        $printer->info("Testing extended styles");
        $printer->newline();

        $printer->out("Testing 'bold' style", 'bold');
        $printer->newline();

        $printer->out("Testing 'italic' style", 'italic');
        $printer->newline();

        $printer->out("Testing 'dim' style", 'dim');
        $printer->newline();

        $printer->out("Testing 'underline' style", 'underline');
        $printer->newline();

        $printer->out("Testing 'inverted' style", 'inverted');
        $printer->newline();
        $printer->newline();
    }
}