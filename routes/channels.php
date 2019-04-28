<?php


Broadcast::channel('App.User.{id}',function (App\User $user,$id)
{
    return (int)$user->id === (int)$id;
});

