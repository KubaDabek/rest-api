<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.People.{id}', function ($people, $id) {
    return (int) $people->id === (int) $id;
});
