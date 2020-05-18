<?php

namespace App\Http\Controllers\Api\V2;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V2\PeopleResource;

class PeopleController extends Controller
{
    

    public function show(Person $person):PeopleResource

    {

        return new PeopleResource($person);

    }

    
}
