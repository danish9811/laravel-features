<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\NoReturn;

class TestController extends Controller {

    public function testHotelBookingQuery() {

    }

    /**
     * @throws Exception
     */
    private function createHashes(): array {
        return [
            Hash::make(random_int(120, 200)),
            Hash::make(random_int(130, 200)),
            Hash::make(random_int(140, 200)),
            Hash::make(random_int(150, 200)),
            Hash::make(random_int(190, 200)),
        ];
    }

}
