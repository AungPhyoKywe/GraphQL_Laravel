<?php

namespace App\GraphQL\Queries;


class UserQuery

{
     public function all()
     {

        return \App\User::all();
     }

     public function find($root ,array $args)
     {

        return \App\User::find($args['id']);
     }

}

?>
