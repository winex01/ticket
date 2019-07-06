<?php

Voyager::routes();

Route::get('/sites/{site}/create', 'SiteTicketController@create')->name('site.create.ticket');
