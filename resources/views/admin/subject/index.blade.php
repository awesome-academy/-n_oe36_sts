@extends('layouts.app_master_admin')
@section('content')
    <h2 class="text-info">{{trans('message.listsubject')}}</h2>
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
    <a href="{{ route('subject.create')}}" type="button" class="btn btn-md btn-info">
        {{trans('message.addsubject')}}<i class="fa fa-plus"></i>
    </a>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
   <table class="table table-hover">
      <tbody>
         <tr>
            <th>{{trans('message.name')}}</th>
            <th>{{trans('message.description')}}</th>
            <th>{{trans('message.image')}}</th>
            <th>{{trans('message.action')}}</th>
         </tr>
         @foreach($subjects as $subject)
         <tr>
            <td>{{ $subject->name}}</td>
            <td>{{ $subject->description}}</td>
            <td><img id="img_index_subject" src="{{URL::to($subject->image)}}" alt=""></td>
            <td>
               <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>{{trans('message.edit')}}</a>
               <form id="form_index_subject" action="{{ route('subject.destroy',$subject->id)}}" id="delete_form" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-xs btn-danger">{{trans('message.delete')}}</button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
<!-- /.box-body -->
<div class="box-footer">
   @if($subjects->hasPages())
   {{ $subjects->links() }}
   @endif
</div>
</div>
@endsection
