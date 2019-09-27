<?php

namespace App\Http\Controllers;

use App\Home;
use App\Http\Middleware\CheckAdmin;
use App\Laboratory;
use App\Lesson;
use App\Publication;
use App\Research;
use App\ResearchHead;
use App\Student;
use App\SubResearchHead;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAdmin::class);
    }

    public function manage_form()
    {
        return view('admin.layouts.app', []);
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

    public function lessons()
    {
        return view('admin.lessons', [
            'lessons' => Lesson::all()
        ]);
    }

    public function laboratories()
    {
        return view('admin.laboratories', [
            'laboratories' => Laboratory::all()
        ]);
    }

    public function add_publication_form()
    {
        return view('admin.add_publication');
    }

    public function add_publication(Request $request)
    {
        $pdf = $this->validate_publication($request);
        Publication::create([
            'name' => $request->name,
            'writers' => $request->writers,
            'details' => $request->details,
            'type' => $request->type,
            'link' => $request->link,
            'years' => $request->years,
            'pdf' => $pdf,

        ]);
        return redirect('admin/publications');
    }

    public function validate_publication(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'writers' => 'required',
            'details' => 'required',
            'type' => 'required|in:publication,activation,confrance',
            'link' => 'required',
            'years' => 'required',
            'pdf' => 'file'
        ]);
        $file = $request->file('pdf');
        Storage::putFileAs('public/publications', $file, 'pdf' . time() . '.' . $file->extension());
        $pdf = url('storage/publications/pdf' . time() . '.' . $file->extension());
        return $pdf;

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
            'writers' => 'required',
            'details' => 'required',
            'type' => 'required|in:publication,activation,confrance',
            'link' => 'required',
            'years' => 'required',
            'pdf' => ''
        ]);
        $publication->name = $request['name'];
        $publication->writers = $request['writers'];
        $publication->details = $request['details'];
        $publication->type = $request['type'];
        $publication->link = $request['link'];
        $publication->years = $request['years'];
        $publication->pdf = $request['pdf'];
        $publication->save();
        return redirect('admin/publications');

    }

    public function add_lesson_form()
    {
        return view('admin.add_lesson');
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

    public function add_laboratory_form()
    {
        return view('admin.add_laboratory', []);
    }

    public function add_laboratory(Request $request)
    {
        $image = $this->validate_laboratory($request);
        Laboratory::create([
            'name' => $request->name,
            'exp' => $request->exp,
            'image' => $image,

        ]);
        return redirect("admin/laboratories");
    }

    public function validate_laboratory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'exp' => 'required',
            'image' => 'required',
        ]);
        $file = $request->file('image');
        Storage::putFileAs('public/laboratories', $file, 'image' . time() . '.' . $file->extension());
        $image = url('storage/laboratories/image' . time() . '.' . $file->extension());
        return $image;
    }

    public function research_heads()
    {
        return view('admin.research_heads', [
            'research_heads' => ResearchHead::all()
        ]);
    }

    public function add_research_head_form()
    {
        return view('admin.add_research_head', []);
    }

    public function add_research_head(Request $request)
    {
        $image = $this->validate_research_head($request);
        ResearchHead::create([
            'name' => $request->name,
            'exp' => $request->exp,
            'image' => $image,

        ]);
        return redirect("admin/research_heads");
    }

    public function validate_research_head(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'exp' => 'required',
            'image' => 'required',
        ]);
        $file = $request->file('image');
        Storage::putFileAs('public/research_heads', $file, 'image' . time() . '.' . $file->extension());
        $image = url('storage/research_heads/image' . time() . '.' . $file->extension());
        return $image;
    }

    public function delete_research_head(ResearchHead $research_head)
    {
        $research_head->delete();
        return back();
    }

    public function edit_research_head(ResearchHead $research_head)
    {
        return view('admin.edit_research_head', [
            'research_head' => $research_head
        ]);
    }

    public function update_research_head(ResearchHead $research_head, Request $request)
    {
        $research_head->name = $request['name'];
        $research_head->image = $request['image'];
        $research_head->exp = $request['exp'];
        $research_head->save();
        return redirect('admin/research_heads');

    }

    public function sub_research_heads(ResearchHead $researchHead)
    {
        return view('admin.sub_research_heads', [
            'sub_research_heads' => $researchHead->sub_research_heads,
        ]);
    }

    public function add_sub_research_head_form(ResearchHead $researchHead)
    {
        return view('admin.add_sub_research_head', [
            'research_head' => $researchHead
        ]);
    }

    public function add_sub_research_head(ResearchHead $researchHead, Request $request)
    {
        $image = $this->validate_sub_research_head($request);
        $researchHead->sub_research_heads()->create([
            'name' => $request->name,
            'exp' => $request->exp,
            'image' => $image,
        ]);
        return redirect('admin/research_head/'.$researchHead->id.'/sub_research_heads');
    }

    public function validate_sub_research_head(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'exp' => 'required',
            'image' => 'required',
        ]);
        $file = $request->file('image');
        Storage::putFileAs('public/sub_research_heads', $file, 'image' . time() . '.' . $file->extension());
        $image = url('storage/sub_research_heads/image' . time() . '.' . $file->extension());
        return $image;
    }

    public function delete_sub_research_head(SubResearchHead $sub_research_head)
    {
        $sub_research_head->delete();
        return back();
    }

    public function edit_sub_research_head(SubResearchHead $sub_research_head)
    {
        return view('admin.edit_sub_research_head', [
            'sub_research_head' => $sub_research_head
        ]);
    }

    public function update_sub_research_head(SubResearchHead $sub_research_head, Request $request)
    {
        $sub_research_head->name = $request['name'];
        $sub_research_head->image = $request['image'];
        $sub_research_head->exp = $request['exp'];
        $sub_research_head->save();
        return redirect('admin/research_head/'.$sub_research_head->research_head_id.'/sub_research_heads');

    }

    public function home_form()
    {
        return view('admin.home', [
            'home' => Home::first()
        ]);
    }

    public function home(Request $request)
    {
        $urls = $this->validate_home($request);
        $bu1 = $urls[0];
        $bu2 = $urls[1];
        Home::updateOrCreate([], [
            'bu1_path' => $bu1,
            'bu2_path' => $bu2,
            'bu' => $request->bu,
        ]);
        return redirect('admin/home');
    }

    public function validate_home(Request $request)
    {
        $this->validate($request, [
            'bu1_path' => '',
            'bu2_path' => '',
            'bu' => 'required'
        ]);
        $bu1 =null;
        $bu2 = null;
        if ($request->hasFile('bu1_path')){
            $file1 = $request->file('bu1_path');
            Storage::putFileAs('public/home', $file1, 'bu1' . time() . '.' . $file1->extension());
            $bu1 = url('storage/home/bu1' . time() . '.' . $file1->extension());

        }
        if ($request->hasFile('bu2_path')){
            $file2 = $request->file('bu2_path');
            Storage::putFileAs('public/home', $file2, 'bu2' . time() . '.' . $file2->extension());
            $bu2 = url('storage/home/bu2' . time() . '.' . $file2->extension());
        }
        return [$bu1, $bu2];

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
        $laboratory->image = $request['image'];
        $laboratory->exp = $request['exp'];
        $laboratory->save();
        return redirect('admin/laboratories');

    }

    public function student_verify(Student $student)
    {
        $student->update(['valid' => true]);
        return back();
    }

}
