<?php

namespace App\Http\Controllers;

use App\Models\City;
use Exception;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\NoReturn;

class TestController extends Controller {

    /**
     * @throws Exception
     */
    #[NoReturn] public function showHashes() {
        dd($this->createHashes());
    }

    public function testHotelBookingQuery() {
        return City::get();
    }

    /**
     * @throws Exception
     */
    private function createHashes() {
        return [
            Hash::make(random_int(120, 200)),
            Hash::make(random_int(130, 200)),
            Hash::make(random_int(140, 200)),
            Hash::make(random_int(150, 200)),
            Hash::make(random_int(190, 200)),
        ];
    }

}
