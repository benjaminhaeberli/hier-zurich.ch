<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;

use function Tempest\view;

final readonly class GlobalController
{
    #[Get('/')]
    public function home(): View
    {
        return view('views\home.view.php')
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
            htmlLang: 'en',
            htmlTitle: 'About',
            // hasRandomBackground: true
        );
    }

    #[Get('/de/about')]
    public function aboutDE(): View
    {
        return view('views\de\about.view.php')
        ->data(
            htmlLang: 'en',
            htmlTitle: 'About',
            // hasRandomBackground: true
        );
    }

    #[Get('/de/watch')]
    public function watchDE(): View
    {
        return view('views\de\watch.view.php')
        ->data(
            htmlLang: 'en',
            htmlTitle: 'Watch',
            // hasRandomBackground: true
        );
    }
}
