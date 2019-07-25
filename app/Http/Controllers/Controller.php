<?php

namespace App\Http\Controllers;

use App\Laboratory;
use App\Lesson;
use App\publication;
use App\Student;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function manage_form()
    {
        return view('admin.layouts.app', []);
    }


    public function home()
    {
        return view('admin.home', [
        ]);
    }

    public function research_head()
    {
        return view('admin.research_head', [
        ]);
    }

    public function students()
    {
        $students = Student::get()->groupBy('grade');
        return view('admin.students', [
            'students' => $students
        ]);
    }

    public function publications()
    {
        return view('admin.publications', [
            'publications' => Publication::all()
        ]);
    }

    public function add_publication_form()
    {
        return view('admin.add_publication');
    }

    public function add_publication(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required|in:publication,activation,confrance',
            'link' => 'required',
            'years' => 'required',
        ]);
        Publication::create([
            'name' => $request->name,
            'type' => $request->type,
            'link' => $request->link,
            'years' => $request->years,
        ]);
        return redirect('admin/publications');
    }

    public function delete_publication(Publication $publication)
    {
        $publication->delete();
        return back();
    }

    public function edit_publication(Publication $publication)
    {
        return view('admin.edit_publication', [
            'publication' => $publication
        ]);
    }

    public function update_publication(Publication $publication, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required|in:publication,activation,confrance',
            'link' => 'required',
            'years' => 'required',
        ]);
        $publication->name = $request['name'];
        $publication->type = $request['type'];
        $publication->link = $request['link'];
        $publication->years = $request['years'];
        $publication->save();
        return redirect('admin/publications');

    }

    public function lessons()
    {
        return view('admin.lessons', [
            'lessons' => Lesson::all()
        ]);
    }

    public function lesson()
    {
        return view('lesson');
    }

    public function add_lesson_form()
    {
        return view('admin.add_lesson');
    }

    public function lessons_form()
    {
        return view('admin/lessons');
    }

    public function add_lesson(Request $request)
    {
        $urls = $this->validate_lesson($request);
        $sample = $urls[0];
        $ppt = $urls[1];
        Lesson::create([
            'name' => $request->name,
            'sample' => $sample,
            'ppt' => $ppt,
        ]);

        return redirect("admin/lessons");

    }

    public function validate_lesson(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'sample' => 'required',
            'ppt' => 'required',
        ]);
        $file1 = $request->file('sample');
        $file2 = $request->file('ppt');
        Storage::putFileAs('public/lessons', $file1, 'sample' . time() . '.' . $file1->extension());
        Storage::putFileAs('public/lessons', $file2, 'ppt' . time() . '.' . $file2->extension());

        $sample = url('storage/lessons/sample' . time() . '.' . $file1->extension());
        $ppt = url('storage/lessons/ppt' . time() . '.' . $file2->extension());
        return [$sample, $ppt];
    }

    public function delete_lesson(Lesson $lesson)
    {
        $lesson->delete();
        return back();
    }

    public function edit_lesson(Lesson $lesson)
    {
        return view('admin.edit_lesson', [
            'lesson' => $lesson
        ]);
    }

    public function update_lesson(Lesson $lesson, Request $request)
    {
        $lesson->name = $request['name'];
        $lesson->sample = $request['sample'];
        $lesson->ppt = $request['ppt'];
        $lesson->save();
        return redirect('admin/lessons');

    }

    public function laboratories_form()
    {
        return view('admin.laboratories', []);
    }

    public function add_laboratory_form()
    {
        return view('admin.add_laboratory', []);
    }

    public function add_laboratory(Request $request)
    {
        $urls = $this->validate_laboratory($request);
        $image = $urls[0];
        Laboratory::create([
            'name' => $request->name,
            'sample' => $image,
            'explanation' => $request->explanation,
        ]);

        return redirect("admin/laboratories");

    }

    public function validate_laboratory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'explanation' => 'required',
        ]);
        $file1 = $request->file('image');
        Storage::putFileAs('public/laboratory', $file1, 'image' . time() . '.' . $file1->extension());
        $image = url('storage/laboratories/image' . time() . '.' . $file1->extension());
        return $image;
    }

    public function student_form()
    {
        $students = Student::where('valid', 1)->get()->groupBy('grade');
        return view('student', [
            'students' => $students
        ]);
    }

    public function laboratory_form()
    {
        return view('laboratory', []);
    }

    public function delete_laboratory(Laboratory $laboratory)
    {
        $laboratory->delete();
        return back();
    }

    public function edit_laboratory(Laboratory $laboratory)
    {
        return view('admin.edit_laboratory', [
            'laboratory' => $laboratory
        ]);
    }

    public function update_laboratory(Laboratory $laboratory, Request $request)
    {
        $laboratory->name = $request['name'];
        $laboratory->sample = $request['sample'];
        $laboratory->ppt = $request['ppt'];
        $laboratory->save();
        return redirect('admin/lessons');

    }

    public function publication()
    {
        $publications = Publication::get()->groupBy('type')->groupBy('years');
        return view('publication', [
            'publications' => $publications
        ]);
    }

    public function research_form()
    {
        return view('research', []);
    }

    public function student_research()
    {
        return view('student_research', []);
    }

    public function add_student_research_form()
    {
        return view('add_student_research', []);
    }

    public function add_student_research(Request $request)
    {
        $urls = $this->validate_student_research($request);
        $poster = $urls[0];
        $pdf = $urls[1];
        $ppt =$urls[2];
        Lesson::create([
            'name' => $request->name,
            'poster' => $poster,
            'pdf' => $pdf,
            'ppt' => $ppt,
        ]);

        return redirect("/student_research");

    }

    public function validate_student_research(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'poster' => 'required',
            'pdf' => 'required',
            'ppt' => 'required',
        ]);
        $file1 = $request->file('poster');
        $file2 = $request->file('pdf');
        $file3 = $request->file('ppt');
        Storage::putFileAs('public/student_research', $file1, 'poster' . time() . '.' . $file1->extension());
        Storage::putFileAs('public/student_research', $file2, 'pdf' . time() . '.' . $file2->extension());
        Storage::putFileAs('public/student_research', $file3, 'ppt' . time() . '.' . $file3->extension());

        $poster = url('storage/student_research/poster' . time() . '.' . $file1->extension());
        $pdf = url('storage/student_research/pdf' . time() . '.' . $file2->extension());
        $ppt = url('storage/student_research/ppt' . time() . '.' . $file3->extension());

        return [$poster,$pdf, $ppt];
    }


}

