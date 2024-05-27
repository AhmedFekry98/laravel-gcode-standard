<<?php

namespace Graphicode\Graphicode\Standard;

    use Illuminate\Support\ServiceProvider;

    class GraphicodeStandardServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            $this->publishes(
                [
                    __DIR__ . '/../lang' => base_path('/lang')
                ],
                ['gcstandard-lang']
            );
        }
    }
