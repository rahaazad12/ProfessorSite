<?php

namespace App\Http\Controllers;

use App\Home;
use App\Laboratory;
use App\Lesson;
use App\Publication;
use App\ResearchHead;
use App\Student;
use App\SubResearchHead;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home_page()
    {
        $home = Home::first();
        return view('index', [
            'home' => $home
        ]);
    }

    public function lessons()
    {
        $lessons = Lesson::get();
        return view('lesson', [
            'lessons' => $lessons
        ]);
    }

    public function students()
    {
        $students = Student::where('valid', 1)->with('user')->get()->groupBy('grade');
        return view('student', [
            'students' => $students,
        ]);
    }

    public function laboratory()
    {
        $laboratory = Laboratory::get();
        return view('laboratory', [
            'laboratories' => $laboratory
        ]);
    }

    public function research_heads()
    {
        $research_head = ResearchHead::get();
        return view('research_heads', [
            'research_heads' => $research_head
        ]);
    }

    public function sub_research_heads(ResearchHead $researchHead)
    {
        $sub_research_head = $researchHead->sub_research_heads;
        return view('sub_researches', [
            'sub_researches' => $sub_research_head
        ]);
    }

    public function publication()
    {
        $publications = Publication::orderBy('years')->get()->groupBy('type');
        return view('publication', [
            'publications' => $publications
        ]);
    }

    public function research_form()
    {
        $research_head = ResearchHead::get();
        return view('research', [
            'research_heads' => $research_head
        ]);
    }

    public function student_researches()
    {
        $student = \Auth::user()->student;
        return view('student_researches', [
            'researches' => $student->researches,
        ]);
    }

    public function add_student_research_form()
    {
        return view('add_student_research');
    }

    public function add_student_research(Request $request)
    {
        $student = \Auth::user()->student;
        $urls = $this->validate_student_research($request);
        $poster = $urls[0];
        $pdf = $urls[1];
        $ppt = $urls[2];
        $student->researches()->create([
            'name' => $request->name,
            'poster' => $poster,
            'pdf' => $pdf,
            'ppt' => $ppt,
        ]);

        return redirect("/student_researches");

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
        \Storage::putFileAs('public/student_research', $file1, 'poster' . time() . '.' . $file1->extension());
        \Storage::putFileAs('public/student_research', $file2, 'pdf' . time() . '.' . $file2->extension());
        \Storage::putFileAs('public/student_research', $file3, 'ppt' . time() . '.' . $file3->extension());

        $poster = url('storage/student_research/poster' . time() . '.' . $file1->extension());
        $pdf = url('storage/student_research/pdf' . time() . '.' . $file2->extension());
        $ppt = url('storage/student_research/ppt' . time() . '.' . $file3->extension());

        return [$poster, $pdf, $ppt];
    }

    public function researches(Student $student)
    {
        return view('researches', [
            'student' => $student,
            'researches' => $student->researches,
        ]);
    }

}
