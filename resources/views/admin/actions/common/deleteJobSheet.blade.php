@if($carving->jobSheet)
	<a
		href="{{ route('admin.carvings.deleteJobSheet', $carving->id) }}"
		class="btn btn-block btn-outline-pink"
		onclick="return confirm('Delete the job sheet?')"
	>
		Delete Job Sheet
	</a>
@endif
