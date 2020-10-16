@extends('layouts.admin.admin-10-2')

@include('admin.recipes.pages.trashed.sections.stylesheet')
@include('admin.recipes.pages.trashed.sections.pageHeader')
@include('admin.recipes.pages.trashed.sections.breadcrumb')
@include('admin.recipes.pages.trashed.sections.sidebar')
@include('admin.recipes.pages.trashed.sections.functions')
@include('admin.recipes.pages.trashed.sections.formBegin')
@include('admin.recipes.pages.trashed.sections.formEnd')

@section('content')

	{{-- @include('admin.recipes.pages.trashed.topbar') --}}

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.recipes.pages.trashed.grid')
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


	@include('modals.destroy', ['modelName'=>'recipe'])
   @include('modals.massDestroy', ['modelName'=>'recipe'])
   @include('modals.restore', ['modelName'=>'recipe'])
   @include('modals.massRestore', ['modelName'=>'recipe'])
   @include('modals.delete', ['modelName'=>'recipe'])
   @include('modals.massDelete', ['modelName'=>'recipe'])
   @include('modals.massPublish', ['modelName'=>'recipe'])
   @include('modals.massUnpublish', ['modelName'=>'recipe'])
   @include('admin.recipes.help')

@endsection
