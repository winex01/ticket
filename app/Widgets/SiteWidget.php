<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class SiteWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Site::count();
        $string = 'Sites';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-helm',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '.$count.' sites in your database. Click on button below to view all sites.',
            'button' => [
                'text' => __('View all sites'),
                'link' => route('voyager.sites.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', app('App\Site'));
    }
}
