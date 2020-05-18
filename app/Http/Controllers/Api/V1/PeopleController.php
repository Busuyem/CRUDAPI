<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Person;
use App\Http\Resources\PeopleResource;
use App\Http\Resources\PeopleResourceCollection;

class PeopleController extends Controller
{
    
    public function show(Person $person): PeopleResource
    {

        return new PeopleResource($person);
    }


    public function index():PeopleResourceCollection
    {

        return new PeopleResourceCollection(Person::paginate());
    }

    public function store(Request $request){

        $data = $this->validate($request, [

            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required'

        ]);

        $person = Person::create($data);

        return new PeopleResource($person);
    }

    public function update(Person $person, Request $request):PeopleResource
    {

        $data = $this->validate($request, [

            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required'

        ]);


            $person->update($data);

        return new PeopleResource($person);
    }

    public function destroy(Person $person){
        
        $person->delete();

        return response()->json();

    }

}
