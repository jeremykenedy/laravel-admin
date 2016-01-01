<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsTagCreateRequest;
use App\Http\Requests\SkillsTagUpdateRequest;
use App\Models\SkillsTag;

class SkillsTagController extends Controller
{

    protected $fields = [
        'tag'               => '',
        'reverse_direction' => 0,
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillstags = SkillsTag::all();
        return view('admin.pages.skills-tags')->withSkillstags($skillstags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.pages.skill-tag-create', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(SkillsTagCreateRequest $request)
    {
        $skilltag = new SkillsTag();
        foreach (array_keys($this->fields) as $field) {
            $skilltag->$field = $request->get($field);
        }
        $skilltag->save();
        return redirect('/admin/skilltags')->with('status', "The skill tag '$skilltag->tag' was created.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skilltag = SkillsTag::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $skilltag->$field);
        }
        return view('admin.pages.skill-tag-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillsTagUpdateRequest $request, $id)
    {
        $skilltag = SkillsTag::findOrFail($id);

        foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
            $skilltag->$field = $request->get($field);
        }
        $skilltag->save();
        return redirect("/admin/skilltags/$id/edit")->with('status', "Skill tag '$skilltag->tag' has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skilltag = SkillsTag::findOrFail($id);
        $skilltag->delete();
        return redirect('/admin/skilltags')->with('status', "Skill tag '$skilltag->tag' has been deleted.");
    }

}
