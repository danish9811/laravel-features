<?php

namespace App\Http\Controllers;

class PenController extends Controller {

    public function __invoke() {
        echo 'Hello from ' . __METHOD__;
    }
}
