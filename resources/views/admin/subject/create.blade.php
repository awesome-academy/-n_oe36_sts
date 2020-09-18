@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h2 class=" text-info">{{trans('message.createsubject') }}</h2>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('subject.store') }}"  >
        @csrf
        <div class="box-body">
            <div class="form-group ">
                <label >{{trans('message.subjectname') }}</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter subject name">
                @error('subjectname')
                <div class="text-danger">{{ $errors->first('name') }}</div>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputDescription">{{trans('message.description') }}</label>
                <textarea type="text" class="form-control" value="{{ old('description') }}" id="exampleInputDescription" name="description" placeholder="Enter Description">
                </textarea>
                @error('description')
                <div class="text-danger">{{ $errors->first('description') }}</div>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputFile">{{trans('message.image') }}</label>
                <input type="file" name="image" value="{{ old('image') }}" id="exampleInputFile">
                @error('image')
                <div class="text-danger">{{ $errors->first('image') }}</div>
                @enderror
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('message.submitadd') }}</button>
        </div>
    </form>
</div>
@endsection
