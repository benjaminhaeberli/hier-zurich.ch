<?php

declare(strict_types=1);

namespace App;

use function Tempest\view;
    use Tempest\Http\Get;

use Tempest\Http\StaticPage;
use Tempest\View\View;

final readonly class GlobalController
{
    #[Get('/')]
    public function home(): View
    {
        return view('views/home.view.php')
        ->data(
            htmlLang: 'en',
            htmlTitle: 'Home',
            // hasRandomBackground: true
        );
    }

    #[Get('/about')]
    public function about(): View
    {
        return view('views\about.view.php')
        ->data(
            htmlLang: 'en',
            htmlTitle: 'About',
            // hasRandomBackground: true
        );
    }

    #[Get('/watch')]
    public function watch(): View
    {
        return view('views\watch.view.php')
        ->data(
            htmlLang: 'en',
            htmlTitle: 'Watch',
            // hasRandomBackground: true
        );
    }

    #[Get('/de')]
    public function homeDE(): View
    {
        return view('views\de\home.view.php')
        ->data(
            htmlLang: 'de',
            htmlTitle: 'About',
            // hasRandomBackground: true
        );
    }

    #[Get('/de/about')]
    public function aboutDE(): View
    {
        return view('views\de\about.view.php')
        ->data(
            htmlLang: 'de',
            htmlTitle: 'About',
            // hasRandomBackground: true
        );
    }

    #[Get('/de/watch')]
    public function watchDE(): View
    {
        return view('views\de\watch.view.php')
        ->data(
            htmlLang: 'de',
            htmlTitle: 'Watch',
            // hasRandomBackground: true
        );
    }
}
