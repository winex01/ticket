<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SiteCreateTicket extends AbstractAction
{
    public function getTitle()
    {
        return 'Create Ticket';
    }

    public function getIcon()
    {
        return 'voyager-plus';
    }

    public function getPolicy()
    {
        if ( auth()->user()->can('add', app('\App\Ticket')) ) {
            return 'browse';
        }
        return false;
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin: 5px;',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.dashboard');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'sites';
    }
}