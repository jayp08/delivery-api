<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\TestLocation;

class TestLocationRepository {
    public function read() {
        return TestLocation::all();
    }

    public function create($request) {
        $testLocation = new TestLocation;

        $testLocation->user_id = 1;
        $testLocation->latitude = $request->latitude;
        $testLocation->longitude = $request->longitude;
        $testLocation->save();

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