<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller {
    public function index() {
        return view('samples.search');
    }

    public function autocomplete(Request $request) {
        $data = Item::select("name")
            ->where("name", "LIKE", "%{$request->query->get('name')}%")
            ->get();

        return response()->json($data);
    }
}
