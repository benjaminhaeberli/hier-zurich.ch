<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;

use function Tempest\view;

final readonly class PagesController
{
    public const PAGES_PATH = '/Views/pages/';

    #[Get('/')]
    public function home(): View
    {
        return view(self::PAGES_PATH . 'home.view.php')
            ->data(
                randomBackgroundUrl: $this->backgroundUrl(),
            );
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
        return view(self::PAGES_PATH . 'de/home.view.php')
            ->data(
                randomBackgroundUrl: $this->backgroundUrl(),
            );
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

    private function backgroundUrl(): string
    {
        /** @var string $url */
        $url = collect([
            '/images/fossile-1.jpg',
            '/images/fossile-2.jpg',
            '/images/river-1.jpg',
        ])
            ->random();

        return $url;
    }
}
