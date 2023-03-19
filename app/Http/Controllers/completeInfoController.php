<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class completeInfoController extends Controller
{

    public function index()
    {
        return view('Pages.completInfo');
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
