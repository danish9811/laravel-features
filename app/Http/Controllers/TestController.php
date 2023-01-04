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
            Hash::make(random_int(100, 200)),
            Hash::make(random_int(120, 200)),
            Hash::make(random_int(130, 200)),
            Hash::make(random_int(140, 200)),
            Hash::make(random_int(150, 200)),
            Hash::make(random_int(190, 200)),
        ];
    }

    // fix fix fix



    private function lines() {
        return [
            'line written by fixes branch',
            'line written by fixes branch',
            'line written by main branch',
            'line written by main branch',
            'line written by main branch',
        ];
    }

}
