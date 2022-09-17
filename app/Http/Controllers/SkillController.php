<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class SkillController extends Controller
{
    public function index(): Response
    {
        $skills = SkillResource::collection(Skill::all());

        return inertia('Skills/Index', compact('skills'));
    }

    public function create(): Response
    {
        return inertia('Skills/Create');
    }

    public function store(
        StoreSkillRequest $request,
        Skill $skills
    ): RedirectResponse {
        $skills->create($request->transformed());

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
