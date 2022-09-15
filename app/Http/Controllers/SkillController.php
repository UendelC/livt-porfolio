<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;

class SkillController extends Controller
{
    public function index(): Response
    {
        return inertia('Skills/Index');
    }

    public function create()
    {
        return inertia('Skills/Create');
    }

    public function store(Request $request)
    {
        //
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
