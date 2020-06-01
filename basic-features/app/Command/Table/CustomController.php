<?php


namespace App\Basic\Command\Table;

use Minicli\Command\CommandController;
use Minicli\Output\Filter\ColorOutputFilter;
use Minicli\Output\Helper\TableHelper;

class CustomController extends CommandController
{
    /**
     * Demonstrates how to use the TableHelper to print custom tables
     */
    public function handle()
    {
        $printer = $this->getPrinter();
        $printer->info("Custom Table Demo using TableHelper");

        $table = new TableHelper();
        $table->addHeader([ 'Some Content', 'Quantity', 'Size', 'Enabled' ], 'info_alt');

        for ($i = 0; $i <= 20; $i++) {
            $styles = ['default', 'alt'];

            $table->addRow(['more content', rand(20, 100), rand(500, 1000) . 'GB', rand(0, 1)], $styles[$i & 1]);
        }

        $formatted = $table->getFormattedTable(new ColorOutputFilter());

        $printer->newline();
        $printer->rawOutput($formatted);
        $printer->newline();
    }
}