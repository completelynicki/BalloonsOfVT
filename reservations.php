<?php include 'header.php'; ?>

<div class="col-md-10 col-md-offset-1">
	<div class="col-md-6">
		<div class="grey-background">
			<div class="page-heading">
				Reserve a flight
			</div>
			<p>Please fill out the form below to reserve a flight. If you have any questions or would prefer to reserve by phone, please call <strong>(802) 369-0213</strong>.</p>
			<?php 
			$action=$_REQUEST['action']; 
			if ($action=="")    /* display the contact form */ 
			    { 
			    ?> 
			<form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
			    	<label for="name">Name</label>
			    	<input type="text" class="form-control" id="name" placeholder="Enter name">
				</div>
				<div class="form-group">
			    	<label for="email">Email address</label>
			    	<input type="email" class="form-control" id="email" placeholder="Enter email">
				</div>
				<div class="form-group">
			    	<label for="phone">Phone number</label>
			    	<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
				</div>
				<div class="form-group">
			    	<label for="date">Date</label>
			    	<input type="text" class="form-control" id="date" placeholder="Enter flight date">
				</div>
				<div class="col-md-6 noPadding">
					<p>Select your preferred flight:</p>
					<div class="radio">
						<label>
					    	<input type="radio" name="flightOptions" id="morning" value="morning" checked>
					    	Morning flight
					  	</label>
					</div>
					<div class="radio">
						<label>
					    	<input type="radio" name="flightOptions" id="evening" value="evening">
					    	Evening flight
					  	</label>
					</div>
					<div class="radio">
						<label>
					    	<input type="radio" name="flightOptions" id="either" value="either">
					    	Doesn't matter
					  	</label>
					</div>
				</div>
				<div class="col-md-6">
					<p>Number of passengers:</p>
					<input type="text" class="form-control" id="number" placeholder="0">
					<div class="checkbox">
						<label>
					    	<input type="checkbox" value="private">
					    	I require a private flight
						</label>
					</div>
				</div>
				<div class="clearAll"></div>
				<label for="message">Message (optional)</label>
				<textarea class="form-control" rows="4" id="message" placeholder="Write anything else we need to know here."></textarea>
				<div class="clearAll"></div>
    			<button type="submit" class="btn btn-navy tenTop right">Submit</button>
    			<div class="clearAll"></div>
			</form>
			    <?php 
				    }  
				else  /* send the submitted data */ 
				    { 
				    $name=$_REQUEST['name']; 
				    $email=$_REQUEST['email']; 
				    $message=$_REQUEST['message']; 
				    if (($name=="")||($email=="")||($message=="")) 
				        { 
				        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
				        } 
				    else{         
				        $from="From: $name<$email>\r\nReturn-path: $email"; 
				        $subject="Message sent using your contact form"; 
				        mail("nickihaylon@gmail.com", $subject, $message, $from); 
				        echo "<div class='mail-alert'>Email sent!</div>"; 
				        } 
				    }   
				?> 
		</div>
	</div>
	<div class="col-md-6">
		<div class="page-heading">
			Flight Information
		</div>
		<p><strong>All flights are weather and wind permitting.</strong> We are at the mercy of Mother Nature and there are occasions that a flight may be canceled right before the scheduled take off.  Weather can change quickly and your safety is our main concern.</p>
		<p>Sunrise flights launch a half hour after sunrise. Sunset flights launch 2 hours before sunset.</p>
		<p>There is an "Assumption of Risk" when flying in a hot air balloon. You can read and review it <a href="">here</a> prior to your flight.</p>
		<div class="page-heading">
			Pricing
		</div>
		<table class="table table-bordered">
			<tr>
				<th>Flight Type</th>
				<th>Price</th>
			</tr>
			<tr>
				<td>Standard</td>
				<td>$275/per person</td>
			</tr>
			<tr>
				<td>Private 2-person</td>
				<td>$950</td>
			</tr>
			<tr>
				<td>Events</td>
				<td>$2000 first 2 hours, $500 each additional half hour</td>
			</tr>
		</table>
		<i class="fa fa-cc-visa fa-2x"></i>&nbsp;
		<i class="fa fa-cc-mastercard fa-2x"></i>&nbsp;
		<i class="fa fa-cc-amex fa-2x"></i>&nbsp;
		Cash/check
		<p>Gift certificates also available!</p>
		<div class="page-heading">
			Cancelation Policy
		</div>
		<p>It is our intent to provide an experience of highest quality at the best possible rates for all our passengers.  When booking a flight with us you are reserving seats in an aircraft with a very limited passenger capacity.  We try to keep the costs down for all of our passengers by flying the right equipment for the number of passengers scheduled for that day.  Empty seats will cause us to incur operating costs, and empty seats cause the rates to rise for all of our other patrons.  Therefore we have just a few simple but non-negotiable rules for cancelation.</p>
		<p>No charges will be made to your credit card until after the flight.  After the flight, you may pay for your flight with cash, check or credit card.</p>
		<p>We only take a credit card to reserve your seats.</p>
		<ul>
			<li>If you do not show up for the pre-flight briefing or miss your flight we will charge the credit card we have on file for your flight.  No excuses! We will issue gift certificates for you to fly with us at another time.</li>
			<li>We require 48 hours notice to cancel a booking.</li>
			<li>Cancelations must be made over the phone at (802) 369-0213.</li>
			<li>Your flight may be canceled by our pilots on the day of the flight for weather or any safety concerns from our pilots. Flight canceled for safety or weather reasons will be rescheduled for the first available dates.</li>
		</ul>
	</div>
	
</div>

<div class="clearAll"></div>
<div class="padding"></div>

<?php include 'footer.php'; ?>