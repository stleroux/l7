<!-- ESTIMATE DATE -->

<div class="col-sm-3">

	<div class="form-group">

		<label for="created_at">Estimate Date</label>

		<div class="input-group">

			<input type="text" name="created_at" class="form-control" value="{{ $invoice->created_at }}" readonly />

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

		</div>

	</div>

</div>
