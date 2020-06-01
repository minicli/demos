<?php

namespace App\CustomTheme\Theme;

use Minicli\Output\CLIColors;
use Minicli\Output\Theme\DefaultTheme;

/**
 * Custom Theme Example
 * Overwrite only the colors you need, the other styles will be picked up from DefaultTheme
 * Style format: `style_name => [ COLOR_FOREGROUND, COLOR_BACKGROUND ]`
 */
class BlueTheme extends DefaultTheme
{
    public function getThemeColors(): array
    {
        return [
            'default' => [ CLIColors::$FG_BLUE ],
            'alt'     => [ CLIColors::$FG_WHITE, CLIColors::$BG_BLUE ],
            'info'    => [ CLIColors::$FG_CYAN ],
            'info_alt' => [ CLIColors::$FG_BLACK, CLIColors::$BG_BLUE ]
        ];
    }
}