<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use App\Http\Requests\SubjectEditRequest;
use App\Models\Subject;
use Illuminate\Support\Facades\Config;
use Session;
use DB;

class SubjectController extends Controller
{
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = $this->subject->paginate(Config::get('app.paginate'));
        return view('admin.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = array();
            getDataSubjectFromRequest($request,$data);
            $image = $request->file('image');
            if($image){
             $data['image'] =  uploadImage($image);
         }
         $subject = $this->subject->create($data);
         DB::commit();
         Session::put('message','Create Subject Successfullly !!');
         return redirect()->route('subject.index');
     }catch(Exception $e) {
        DB::rollBack();
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $subject = $this->subject->findOrFail($id);
            return view('admin.subject.edit',compact('subject'));
        }catch(Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('subject.index')->with('error',trans('message.cannotfindid'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectEditRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = array();
            getDataSubjectFromRequest($request,$data);
            $image = $request->file('image');
            $old_image = $request->old_image;
            if ($image) {
               unlink($old_image);
               $data['image'] =  uploadImage($image);
           }
           $this->subject->findOrFail($id)->update($data);
           DB::commit();
           return redirect()->route('subject.index')->with('success',trans('message.subjecteditsuccess'));;
       } catch (Exception $e) {
        DB::rollBack();
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            $subject =$this->subject->findOrFail($id);
            $subject->delete();
            DB::commit();
            return redirect()->route('subject.index')->with('success',trans('message.subjectdeletesuccess'));
        }catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('subject.index')->with('error',trans('message.subjectdeleteerror'));
        }

    }
}
