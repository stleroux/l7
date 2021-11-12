<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">Terms and Conditions</div>
			<div class="card-body">
				@include('admin.invoicer.termsAndConditions')							
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="row">
				<div class="col-sm-6 text-right">
					<b>SubTotal</b>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ ($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00') }}$</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 text-right">
					<b>HST</b>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ number_format($invoice->hst, 2, '.', ' ') }}$</span>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 text-right">
					<b>Discount</b>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ number_format($invoice->discounts, 2, '.', ' ') }}$</span>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 text-right">
					<b>Deposit</b>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ number_format($invoice->deposits, 2, '.', ' ') }}$</span>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 text-right">
					<b>Payments</b>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ number_format($invoice->payments, 2, '.', ' ') }}$</span>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 text-right">
					<strong>Total Owing</strong>
				</div>
				<div class="col-sm-6">
					<span class="float-right">{{ number_format($invoice->total, 2, '.', ' ') }}$</span>
				</div>
			</div>
		</div>
	</div>
</div>
