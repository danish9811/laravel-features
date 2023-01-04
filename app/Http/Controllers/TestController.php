<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\NoReturn;

class TestController extends Controller {

    private string $letters = 'abcdefghijklmnopqrstuvwxyz0123456789';

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
            Hash::make($this->createRandomLetteredString(random_int(20, 99))),
            Hash::make(random_int(120, 200)),
            Hash::make(random_int(130, 200)),
            Hash::make(random_int(140, 200)),
            Hash::make(random_int(150, 200)),
            Hash::make(random_int(190, 200)),
        ];
    }

    /**
     * @throws Exception
     */
    private function createRandomLetteredString(int $strLength = 10) {
        $str = '';
        $masterStringLength = strlen($this->letters);
        for ($i = 0; $i < $strLength; $i++)
            $str .= $this->letters[random_int(0, $masterStringLength)];
        return $str;
    }

    public function sampleMethod() {
        return 'hello world';
    }


}
