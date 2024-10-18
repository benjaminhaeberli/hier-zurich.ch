<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;

use function Tempest\path;
use function Tempest\view;

final readonly class PagesController
{
    const PAGES_PATH = '/Views/pages/';

    #[Get('/')]
    public function hom(): View
    {
        return view(self::PAGES_PATH . 'home.view.php');
    }

    #[Get('/about')]
    public function about(): View
    {
        return view(self::PAGES_PATH . 'about.view.php');
    }

    #[Get('/watch')]
    public function watch(): View
    {
        return view(self::PAGES_PATH . 'watch.view.php');
    }

    #[Get('/de')]
    public function homeDE(): View
    {
        return view(self::PAGES_PATH . 'de/home.view.php');
    }

    #[Get('/de/about')]
    public function aboutDE(): View
    {
        return view(self::PAGES_PATH . 'de/about.view.php');
    }

    #[Get('/de/watch')]
    public function watchDE(): View
    {
        return view(self::PAGES_PATH . 'de/watch.view.php');
    }
}
