@extends('layouts.app_master_admin')
@section('content')
<h1>{{ trans('message.course.listcourse') }}</h1>
<a href="{{ route('courses.create')}}" type="button" class="btn btn-md btn-info">Add Course <i class="fa fa-plus"></i></a>
<div class="box-body table-responsive no-padding">
   @if (session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
   @endif
   @if (session('error'))
   <div class="alert alert-danger">
      {{ session('error') }}
   </div>
   @endif
   <table class="table table-hover table-striped table-bordered">
      <tbody>
         <tr>
            <th>{{ trans('message.course.name') }}</th>
            <th>{{ trans('message.course.description') }}</th>
            <th>{{ trans('message.course.duration') }} <span>({{ trans('message.course.month') }})</span> </th>
            <th>{{ trans('message.course.image') }}</th>
            <th>{{ trans('message.course.startday') }}</th>
            <th>{{ trans('message.course.endday') }}</th>
            <th>{{ trans('message.course.action') }}</th>
         </tr>
         @foreach($courses as $course)
         <tr>
            <td>{{ $course->name}}</td>
            <td>{{ $course->description}}</td>
            <td>{{ $course->duration}}</td>
            <td>
               <div class="form-group ">
                  <img id="image_index_course" src="{{URL::to($course->image)}}" alt="">
               </div>
            </td>
            <td>{{ date('Y/m/d',strtotime($course->start_day))}}</td>
            <td>{{ date('Y/m/d',strtotime($course->end_day))}}</td>
            <td>
               <a href="{{ route('courses.edit',$course->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>{{ trans('message.course.editbtn') }}</a>
               <form class="btn_inline" action="{{ route('courses.destroy',$course->id)}}" id="delete_form" method="POST">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-xs" type="submit">{{ trans('message.course.deletebtn') }}</button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
<div class="box-footer">
   {!! $courses !!}
</div>
</div>
@endsection
