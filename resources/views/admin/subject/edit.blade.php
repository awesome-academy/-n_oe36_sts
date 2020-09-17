@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h2 class="text-info">{{trans('message.editsubject')}}</h2>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('subject.update',$subject->id) }}"  >
        @csrf
        @method('PUT')
        <div class="box-body">
            <input type="hidden" name="id">
            <div class="form-group ">
                <label >{{trans('message.subjectname')}}</label>
                <input type="text" class="form-control"  name="name" value="{{ $subject->name }}" placeholder="Enter subject name">
                @error('name')
                <div class="text-danger">{{ $errors->first('name') }}</div>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputDescription">{{trans('message.description')}}</label>
                <textarea  class="form-control"  id="exampleInputDescription" name="description" placeholder="Enter Description">
                    {{ $subject->description }}
                </textarea>
                @error('description')
                <div class="text-danger">{{ $errors->first('description') }}</div>
                @enderror
            </div>

            <div class="form-group ">
                <label for="exampleInputFile">{{trans('message.image')}}</label>
                <input type="file" name="image" value="{{ $subject->image }}"  id="exampleInputFile">
                @error('image')
                <div class="text-danger">{{ $errors->first('image') }}</div>
                @enderror
            </div>
                 <div class="form-group ">
                <label for="exampleInputFile">{{trans('message.imageold')}}</label>
                <img id="img_edit_subject" src="{{ asset($subject->image)}}" alt="">
                <input type="hidden" name="old_image" value="{{$subject->image}}">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('message.submitedit')}}</button>
            <button type="reset" class="btn btn-warning">{{trans('message.reset')}}</button>
        </div>
    </form>
</div>
@endsection
