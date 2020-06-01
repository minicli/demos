<?php


namespace App\CustomTheme\Command\Styles;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    /**
     * Demonstrates how to use the default print shortcuts
     */
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