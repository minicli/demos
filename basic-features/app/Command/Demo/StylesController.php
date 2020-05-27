<?php


namespace App\Basic\Command\Demo;

use Minicli\Command\CommandController;

class StylesController extends CommandController
{
    public function handle()
    {
        $printer = $this->getPrinter();

        $printer->display("TEST DISPLAY");
        $printer->display("TEST DISPLAY ALT", true);
        $printer->success("TEST SUCCESS");
        $printer->success("TEST SUCCESS ALT", true);
        $printer->error("TEST ERROR");
        $printer->error("TEST ERROR ALT", true);
        $printer->info("TEST INFO");
        $printer->info("TEST INFO ALT", true);
    }
}