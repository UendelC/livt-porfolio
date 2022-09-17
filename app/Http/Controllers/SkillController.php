<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class SkillController extends Controller
{
    public function index(): Response
    {
        return inertia('Skills/Index');
    }

    public function create(): Response
    {
        return inertia('Skills/Create');
    }

    public function store(
        StoreSkillRequest $request,
        Skill $skills
    ): RedirectResponse {
        $skills->create($request->validated());

        return redirect(route('skills.index'));
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
