<?php

namespace App\Http\Controllers;

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

    /**
     * @throws Exception
     */
    private function createHashes() {
        return [
            Hash::make(random_int(129, 20)),
            Hash::make(random_int(10, 120)),
            Hash::make(random_int(10, 200)),
            Hash::make(random_int(10, 20)),
            Hash::make(random_int(100, 200)),
        ];
    }

}
