<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;
use SleepingOwl\Admin\Navigation\Page;
use AdminSection;
use PackageManager;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Offer::class => 'App\Http\Admin\Offer',
    ];


    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        parent::boot($admin);

        $this->registerNRoutes();
        $this->registerNavigation();
        $this->registerMediaPackages();
    }

    private function registerNavigation()
    {
        \AdminNavigation::setFromArray([
            [
                'title' => trans('core.title.organisation'),
                'icon' => 'fa fa-group',
                'priority' => 1000,
                'pages' => [
                    (new Page(User::class))->setPriority(0),
                    (new Page(Offer::class))->setPriority(300)
                ]
            ]
        ]);
    }

    private function registerNRoutes()
    {
        $this->app['router']->group(['prefix' => config('sleeping_owl.url_prefix'), 'middleware' => config('sleeping_owl.middleware')], function ($router) {
            $router->get('', ['as' => 'admin.dashboard', function () {
                $content = 'Define your dashboard here.';
                return AdminSection::view($content, 'Dashboard');
            }]);
        });
    }

    private function registerMediaPackages()
    {
        PackageManager::add('front.controllers')
            ->js(null, asset('js/controllers.js'));
    }
}
