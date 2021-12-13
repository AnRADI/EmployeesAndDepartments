<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
	public $teacher, $discipline;

	public function __construct() {

		$this->teacher = new Teacher();
		$this->discipline = new Discipline();
	}


    public function index()
    {
    	$teachers = $this->teacher
			->paginateTeachersDisciplinesTI();


        return view('pages.teachers.index', compact('teachers'));
    }


    public function create()
    {
		$disciplines = $this->discipline
			->getDisciplinesTC();

        return view('pages.teachers.create', compact('disciplines'));
    }


    public function store(Request $request)
    {
        $form = $request->all();


		Validator::make($form, [
			'name' => ['required', 'min:3', 'max:20'],
			'surname' => ['required', 'min:3', 'max:20'],
			'email' => ['required', 'email'],
			'disciplines_id' => ['required', 'array'],
			'photo' => ['required', 'image', 'max:2048'],
		])->validate();


		// Validation array disciplines_id

		$allDisciplinesId = $this->discipline
			->arrayDisciplinesId();

		foreach ($form['disciplines_id'] as $discipline_id) {

			if(empty(in_array($discipline_id, $allDisciplinesId))) {

				return back()->withErrors(['disciplines_id' => "There is no such category or categories."]);
			}
		}

		unset($form['disciplines_id']);


		// Upload photo

		$photoName = $request->photo->getClientOriginalName();
		$request->photo->storeAs('uploads', $photoName, 'public');

		$hashFile = substr(md5_file($request->photo->getRealPath()), -20);
		$form['photo'] = '/storage/uploads/' . $photoName . '?id=' . $hashFile;


		// Save DB

		$teacher = $this->teacher
			->create($form);

		$teacher->disciplines()
			->attach($request->disciplines_id);


		return back()->with(['success' => 'Преподаватель добавлен успешно']);
    }



    public function edit($id)
    {
        $teacher = $this->teacher
			->firstTeacherDisciplinesTE($id);

		$disciplines = $this->discipline
			->getDisciplinesTE();


        return view('pages.teachers.edit', compact('teacher', 'disciplines'));
    }


    public function update(Request $request, $id)
    {
		$form = $request->all();


		Validator::make($form, [
			'name' => ['required', 'min:3', 'max:20'],
			'surname' => ['required', 'min:3', 'max:20'],
			'email' => ['required', 'email'],
			'disciplines_id' => ['required', 'array'],
			'photo' => ['image', 'max:2048'],
		])->validate();


		// Validation array disciplines_id

		$allDisciplinesId = $this->discipline
			->arrayDisciplinesId();

		foreach ($form['disciplines_id'] as $discipline_id) {

			if(empty(in_array($discipline_id, $allDisciplinesId))) {

				return back()->withErrors(['disciplines_id' => "There is no such category or categories."]);
			}
		}

		unset($form['disciplines_id']);


		// Upload photo

		if($request->photo) {

			$photoName = $request->photo->getClientOriginalName();

			$request->photo->storeAs('uploads', $photoName, 'public');

			$hashFile = substr(md5_file($request->photo->getRealPath()), -20);
			$form['photo'] = '/storage/uploads/' . $photoName . '?id=' . $hashFile;
		}


		// Update DB

		$updateTeacher = $this->teacher
			->find($id);

		$updateTeacher->update($form);

		$updateTeacher->disciplines()
			->detach();

		$updateTeacher->disciplines()
			->attach($request->disciplines_id);


		return back()->with(['success' => 'Преподаватель обновлен успешно']);
    }


    public function destroy($id)
    {

		Teacher::destroy($id);

		return redirect()->route('teachers.index');
    }
}
