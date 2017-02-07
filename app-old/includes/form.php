<div class="form-wrap">
	<h2>1.Iowa Married Name Change Form</h2>
	<p>Complete the form below to get started. Please enter your information carefully and completely, as documents will be emailed to you.</p>
	<form role="form">
		<div class="form-section">
			<h3>Maiden or Current Legal Name:</h3>
			<div class="row">
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">First</label>
				        <input type="text" class="form-control" placeholder="First">
				    </div>
				</div>
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">Middle</label>
				        <input type="text" class="form-control" placeholder="Middle">
				    </div>
				</div>
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">Last</label>
				        <input type="text" class="form-control" placeholder="Last">
				    </div>
				</div>
			</div> <!-- END ROW -->
		</div> <!-- END FORM SECTION -->
		<div class="form-section">
			<h3>Married Name:</h3>
			<div class="row">
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">First</label>
				        <input type="text" class="form-control" placeholder="First">
				    </div>
				</div>
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">Middle</label>
				        <input type="text" class="form-control" placeholder="Middle">
				    </div>
				</div>
				<div class="col-sm-4">
				    <div class="form-group float-label-control">
				        <label for="">Last</label>
				        <input type="text" class="form-control" placeholder="Last">
				    </div>
				</div>
			</div> <!-- END ROW -->
		</div> <!-- END FORM SECTION -->
		<div class="form-section">
			<h3>Your Email:</h3>
			<div class="row">
				<div class="col-sm-6">
				    <div class="form-group float-label-control">
				        <label for="">Email Address</label>
				        <input type="email" class="form-control" placeholder="Email Address">
				    </div>
				</div>
				<div class="col-sm-6">
				    <div class="form-group float-label-control">
				        <label for="">Verify Email Address</label>
				        <input type="email" class="form-control" placeholder="Verify Email Address">
				    </div>
				</div>
			</div>
		</div>
		<div class="form-section">
			<h3>State In Which You Currently Reside:</h3>
			<div class="row">
				<div class="col-sm-12">
				    <div class="form-group">
				        <?php include 'includes/select-state.php'; ?>
				    </div>
				</div>
			</div> <!-- END ROW -->
		</div> <!-- END FORM SECTION -->
		
		<button type="submit" class="btn btn-primary">Submit Form</button>
	</form>
</div>
<div class="form-wrap">
	<h2>2.Payment Details</h2>
	<img class="img-responsive pull-right accepted-cards" alt="Accepted Cards" src="../images/accepted_cards.png">                       
	<form class="cardInfo">
		<fieldset class="cardInfo__cardDetails form-section">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group float-label-control cardInfo__cc-num">
						<div class="cc-num__wrap">
							<input id="cc-num" type="tel" class="paymentInput cc-num" placeholder="•••• •••• •••• ••••" autocompletetype="cc-number" required="required">
							<label for="cc-num">
								<span class="good-num">Card Number</span>
								<span class="bad-num">Check Your Type</span>
							</label>
							<span class="card" aria-hidden="true"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div class="form-group float-label-control cardInfo__cc-exp">
						<label for="cc-exp">
							<span>Expires</span>
						</label>
						<input id="cc-exp" type="tel" class="paymentInput cc-exp cc-exp__demo" placeholder="MM / YY" autocompletetype="cc-exp" required="required">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group float-label-control cardInfo__cc-cvc">
						<label for="cc-cvc">
							<span>CVC</span>
						</label>
						<input id="cc-cvc" type="tel" class="paymentInput cc-cvc cc-cvc__demo" placeholder="CVC" autocompletetype="cc-cvc" required="required">
					</div>
				</div>
			</div>
		</fieldset>
		<div class="cardInfo__submission">
			<button class="btn btn-primary" name="commit" type="submit">Make Payment</button>
			<a class="cancel-link" href="#">Cancel</a>
		</div>
	</form>
</div>