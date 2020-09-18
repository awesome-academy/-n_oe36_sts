@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
   <div class="box-header with-border">
      <h3 class="box-title">{{ trans('message.course.editcourse') }}</h3>
   </div>
   <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('courses.update',$course->id) }}"  >
      @csrf
      @method('PUT')
      <div class="box-body">
         <div class="form-group {{ $errors->first('name') ? 'has-error' : ''}} ">
            <label class="control-label" >{{ trans('message.course.name') }}</label>
            <input type="text" class="form-control" value="{{ $course->name }}" name="name" placeholder="Enter name course">
            @error('name')
            <div class="text-danger">{{ $errors->first('name') }}</div>
            @enderror
         </div>
         <div class="form-group {{ $errors->first('description') ? 'has-error' : ''}}">
            <label class="control-label" for="exampleInputEmail1">{{ trans('message.course.description') }}</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter Description" >{{ $course->description }}</textarea>
            @error('description')
            <div class="text-danger">{{ $errors->first('description') }}</div>
            @enderror
         </div>
         <div class="form-group {{ $errors->first('duration') ? 'has-error' : ''}} ">
            <label class="control-label" >{{ trans('message.course.duration') }}</label>
            <input type="number" class="form-control" value="{{ $course->duration }}" name="duration" placeholder="Enter duration">
            @error('duration')
            <div class="text-danger">{{ $errors->first('duration') }}</div>
            @enderror
         </div>
         <div class="form-group {{ $errors->first('image') ? 'has-error' : ''}} ">
            <label class="control-label" for="exampleInputFile">{{ trans('message.course.image') }}</label>
            <input type="file" name="image" id="exampleInputFile">
            @error('image')
            <div class="text-danger">{{ $errors->first('image') }}</div>
            @enderror
         </div>
         <div class="form-group  ">
            <label class="control-label" for="exampleInputFile">{{ trans('message.course.oldimage') }}</label>
            <img id="image_edit_course" src="{{URL::to($course->image)}}" alt="">
            <input type="hidden" name="old_image" value="{{$course->image}}">
         </div>
         <div class="form-group {{ $errors->first('start_day') ? 'has-error' : ''}}">
            <label class="control-label">{{ trans('message.course.startday') }}:</label>
            <div class="input-group date">
               <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control pull-right"
                  value="{{ date('Y/m/d', strtotime($course->start_day)) }}" id="datepicker" name="start_day">
            </div>
            @error('start_day')
            <div class="text-danger">{{ $errors->first('start_day') }}</div>
            @enderror
         </div>
         <div class="form-group {{ $errors->first('end_day') ? 'has-error' : ''}}">
            <label class="control-label">{{ trans('message.course.endday') }}:</label>
            <div class="input-group date">
               <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control pull-right" value="{{ date('Y/m/d', strtotime($course->end_day)) }}" id="datepicker1" name="end_day">
            </div>
            @error('end_day')
            <div class="text-danger">{{ $errors->first('end_day') }}</div>
            @enderror
         </div>
      </div>
      <div class="box-footer">
         <button type="submit" class="btn btn-primary">{{ trans('message.course.submit') }}</button>
         <button type="reset" class="btn btn-warning">{{ trans('message.course.reset') }}</button>
      </div>
   </form>
</div>
@endsection
