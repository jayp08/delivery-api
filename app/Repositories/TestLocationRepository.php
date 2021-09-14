<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\TestLocation;

class TestLocationRepository {
    public function read() {
        return TestLocation::all();
    }

    public function create($request) {
        $testLocation = TestLocation::updateOrCreate(
            [ 'user_id' => Auth::id() ],
            [
                'user_id' => Auth::id(),
                'latitude' => $request->latitude,
                'longitude' => $request->longitude
            ]
        );
        // $testLocation = TestLocation::where('user_id', Auth::id());
        // // return response()->json($testLocation);

        // if ($testLocation) {
        //     return "not existing";
        // } else {
        //     return "existing";
        // }

        // if (!$testLocation) { 
        //     $testLocation = new TestLocation;
            
        // }
       
        // $testLocation->latitude = $request->latitude;
        // $testLocation->longitude = $request->longitude;
        // $testLocation->save();

        if ($testLocation) {
            return response()->json(['status' => 'success','message' => 'Location has been created']);
        } else {
            return response()->json(['status' => 'error','message' => 'Unable to create Location']);
        }
    }
    
    public function update($request, $id) {
        $testLocation = TestLocation::find($id);

        if ($testLocation) {
            $testLocation->latitude = $request->latitude;
            $testLocation->longitude = $request->longitude;
            $testLocation->save();
        }
       
        if ($testLocation) {
            return response()->json(['status' => 'success','message' => 'Location has been created']);
        } else {
            return response()->json(['status' => 'error','message' => 'Unable to create Location']);
        }
    }
}