<?php

namespace linkshare\Http\Controllers;

use Illuminate\Http\Request;

use linkshare\Http\Requests;
use linkshare\Http\Controllers\Controller;
use linkshare\Http\Requests\SubFormRequest;
use linkshare\Sub;

class SubController extends Controller
{

    public function show($name)
    {
        $sub = Sub::where('name', $name)->firstOrFail();

        return view('sub')
            ->with('sub', $sub->name)
            ->with('posts', $sub->posts()->paginate(15));
    }

    public function displayform()
    {
        return view('forms.createsub')
            ->with('title', 'Create Sub');
    }

    public function storesub(SubFormRequest $request)
    {
        $sub = new Sub;
        $sub->name = $request->get('name');
        $sub->owner_id = \Auth::id();
        $sub->save();

        return \Redirect::to('r/' . $request->get('name'));
    }
}
