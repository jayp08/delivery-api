<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TestLocationRepository;

class TestLocationController extends Controller
{
    private $testLocationRepository;
  
    public function __construct(TestLocationRepository $testLocationRepository)
    {
        $this->testLocationRepository = $testLocationRepository;
    }

    public function read() {
        return $this->testLocationRepository->read();
    }

    public function create(Request $request) {
        return $this->testLocationRepository->create($request);
    }

    public function update(Request $request, $id) {
        return $this->testLocationRepository->update($request, $id);
    }
}
