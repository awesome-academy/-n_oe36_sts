@extends('layouts.app_master_admin')
@section('content')
<h1> {{ trans('message.listuser') }} </h1>
<a href="{{ route('users.create')}}" type="button" class="btn btn-md btn-info">{{ trans('message.adduser') }} <i class="fa fa-plus"></i></a>
<div class="box-body table-responsive no-padding">
   @if (session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
   @endif
   <table class="table table-hover">
      <tbody>
         <tr>
            <th>{{ trans('message.username') }}</th>
            <th>{{ trans('message.phone') }}</th>
            <th>{{ trans('message.gender') }}</th>
            <th>{{ trans('message.email') }}</th>
            <th>{{ trans('message.address') }}</th>
         </tr>
         @foreach($users as $user)
         <tr>
            <td>{{ $user->username}}</td>
            <td>{{ $user->phone}}</td>
            <td>
               {{ $user->gender ? 'Male' : 'Female'}}
            </td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->address}}</td>
            <td>
               <a href="{{ route('users.show',$user->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle"></i>{{ trans('message.detailbtn') }}</a>
               <a href="{{ route('users.edit',$user->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>{{ trans('message.editbtn') }}</a>
               <form id="btn_inline_user" action="{{ route('users.destroy',$user->id)}}" id="delete_form" method="POST">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-xs" type="submit">{{ trans('message.deletebtn') }}</button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <div class="box-footer">
      @if($users->hasPages())
      {{ $users->links() }}
      @endif
   </div>
</div>
</div>
@endsection
