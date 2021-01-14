@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.posts') }}"></i>
   Trashed Posts
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">Trashed Posts</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.posts.pages.trashed.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.posts.pages.trashed.grid')
            </div>

				<div class="card-footer p-2">
					<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="2"><strong>Note:</strong></td>
						</tr>
						<tr>
							<td>Restore</td>
							<td>: Will restore the individual record. (Removes the deleted_at info but does not change anything else.)</td>
						</tr>
						<tr>
							<td>Delete</td>
							<td>: Will <span class="text-danger"><strong>permanently delete</strong></span> the individual record from the database.</td>
						</tr>
						<tr>
							<td>Publish Selected</td>
							<td>: Will set the deleted_at field to Null and the published_at field to the current date and time for all selected records.</td>
						</tr>
						<tr>
							<td>Restore Selected&nbsp;</td>
							<td>: Will set the deleted_at field to Null for all selected records. (Will not change anything else.)</td>
						</tr>
						<tr>
							<td>Delete Selected</td>
							<td>: Will <span class="text-danger"><strong>permanently delete</strong></span> all selected records from the database.</td>
						</tr>
					</table>
				</div>
         </div>
      </div>
   </div>


	@include('modals.destroy', ['modelName'=>'post'])
   @include('modals.massDestroy', ['modelName'=>'post'])
   @include('modals.restore', ['modelName'=>'post'])
   @include('modals.massRestore', ['modelName'=>'post'])
   @include('modals.delete', ['modelName'=>'post'])
   @include('modals.massDelete', ['modelName'=>'post'])
   @include('modals.massPublish', ['modelName'=>'post'])
   @include('modals.massUnpublish', ['modelName'=>'post'])
   @include('admin.posts.help')

@endsection
