<footer class="container-fluid w-100 bg-dark text-light py-2">
	<div id="footer">
		<div class="text-center">
			<div class="col-12">
				Copyright &copy; {{ now()->year }} <strong><a href="http://www.thewoodbarn.ca" class="text-light">TheWoodBarn.ca</a>&nbsp;</strong> All rights reserved.
			</div>
			<div class="col-12">
				<div class="small">
					<a href="{{ route('terms') }}" class="text-light">Terms &amp; Conditions</a> | <a href="{{ route('privacy') }}" class="text-light">Privacy Policy</a>
				</div>
			</div>
			<div class="col-12">
				Version {{ config('settings.siteVersionNo') }}
			</div>
		</div>
	</div>
</footer>
