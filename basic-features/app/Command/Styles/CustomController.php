<?php


namespace App\Basic\Command\Styles;

use Minicli\Command\CommandController;
use Minicli\Output\CLIColors;
use Minicli\Output\Filter\ColorOutputFilter;

class CustomController extends CommandController
{
    /**
     * Demonstrates different ways to manipulate the default theme and include
     * custom styles at the Command level
     */
    public function handle()
    {
        // creates a new ColorOutputFilter and sets a custom style
        $color_filter = new ColorOutputFilter();
        $theme = $color_filter->getTheme();
        $theme->setStyle('my_custom_style', [CLIColors::$FG_MAGENTA, CLIColors::$BG_CYAN]);

        // Prints a custom style
        $printer = $this->getPrinter();
        $printer->newline();
        $printer->rawOutput($color_filter->format("Testing custom style", 'my_custom_style'));
        $printer->newline();

        // Overwrite default styles and attach the new color filter to the output handler
        $theme->setStyle('default', [CLIColors::$FG_MAGENTA]);
        $theme->setStyle('alt', [CLIColors::$FG_MAGENTA, CLIColors::$BG_CYAN]);

        $output = $this->getPrinter();
        $output->clearFilters();
        $output->registerFilter($color_filter);

        $output->display("Now printing with overwritten styles - default");
        $output->display("Now printing with overwritten styles - alt", true);
        $printer->newline();
    }
}