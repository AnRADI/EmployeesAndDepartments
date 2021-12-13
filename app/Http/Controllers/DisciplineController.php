<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DisciplineController extends Controller
{
	public $discipline;

	public function __construct() {

		$this->discipline = new Discipline();
	}


	public function index()
    {
    	$disciplines = $this->discipline
			->paginateDisciplinesDI();


        return view('pages.disciplines.index', compact('disciplines'));
    }


    public function create()
    {

		return view('pages.disciplines.create');
    }


    public function store(Request $request)
    {
		$form = $request->all();


		Validator::make($form, [
			'name' => ['required', 'min:3', 'max:20'],
		])->validate();


		$teacher = $this->discipline
			->create($form);


		return back()->with(['success' => 'Дисциплина добавлена успешно']);
    }


    public function edit($id)
    {
    	$discipline = $this->discipline
			->firstDisciplineDE($id);


		return view('pages.disciplines.edit', compact('discipline'));
    }


    public function update(Request $request, $id)
    {
		$form = $request->all();


		Validator::make($form, [
			'name' => ['required', 'min:3', 'max:20'],
		])->validate();


		$updateDiscipline = $this->discipline
			->firstDisciplineDU($id);

		$updateDiscipline->update($form);


		return back()->with(['success' => 'Дисциплина обновлена успешно']);
    }


    public function destroy($id)
    {

        Discipline::destroy($id);

        return redirect()->route('disciplines.index');
    }
}
