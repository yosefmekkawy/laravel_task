<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function delete(Request $request)
    {
            $item=('App\Models\\'.request('model_name'))::query()->find(request('id'));
            $item->delete();
            return redirect()->back()->with('message','Item has been deleted');

    }

}
