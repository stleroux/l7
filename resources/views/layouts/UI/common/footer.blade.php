<footer class="footer fixed-bottom bg-dark text-light mt-auto py-3 px-3 d-print-none">

	<div class="row">

	   <div class="col">
	   	<strong>Copyright &copy; 2020 <a href="http://www.thewoodbarn.ca">TheWoodBarn.ca</a>.</strong> All rights reserved.
	   </div>

		<div class="col text-center d-none d-sm-block">
			<div class="small">
	      	<a href="{{ route('terms') }}">Terms &amp; Conditions</a> | <a href="{{ route('privacy') }}">Privacy Policy</a>
	   	</div>
	   </div>

	   <div class="col text-right d-none d-sm-block">
	      <b>Version</b> {{ config('settings.siteVersionNo') }}
	   </div>
	
	</div>

</footer>
