<?php
session_start();
?>
    <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?> 
   
     <div id="Reservation" class="w3-container w3-padding-32 w3-black"style="margin-left:2%">
     <div class="w3-card w3-container w3-black" style="min-height:360px">
     <h3 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">RESERVATION</span></h3>    
     <form method="post" action="confirmation.php">
          <p><label> Name</label></p>
	  <div class="w3-row-padding" style="margin:0 -16px;">
	  <div class="w3-half w3-margin-bottom">
          <input class="w3-input w3-border" type="text" placeholder="First name" name="first" value="<?php if (isset($_POST['first'])) echo $_POST['first']; ?>"required> 
	  </div>
	   <div class="w3-half w3-margin-bottom">
	  <input class="w3-input w3-border" type="text" placeholder="Last name" name="last"value="<?php if (isset($_POST['last'])) echo $_POST['last']; ?>" required> 
	  </div>
	  </div>
	  <p><label> Phone</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Phone number" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"required> 
	  <p><label>Email</label></p>
          <input class="w3-input w3-border" type="email" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"required>           
          <p><label> Date</label></p>
          <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="date" min="<?php echo date('Y-m-d'); ?>" value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>"required>          
         
	  <p><label> Add Event</label></p>
          <select class="w3-select w3-border" name="event" value="<?php if (isset($_POST['event'])) echo $_POST['event']; ?>"required> 
	   <option value="">None</option>  
               <option value="Birthday Party">Birthday Party</option>
	       <option value="Majlis Aqiqah">Majlis Aqiqah</option>
               <option value="Baby Shower">Baby Shower</option>
	       <option value="Nikah Ceremony">Nikah Ceremony</option>
	       <option value="Reunion">Reunion</option>
	       <option value="Small Exhibitions">Small Exhibitions</option>
	       <option value="Organise Markets">Organise Markets</option>
	       <option value="Majlis Berbuka Puasa">Majlis Berbuka Puasa</option>
	       <option value="Seminars">Seminars</option>
	       <option value="Workshop">Workshop</option>
               </select><br/><br/>   
	           
                  
         
          <p><button class="w3-button w3-block w3-black w3-third w3-margin-bottom w3-left-align" type="submit" value="Submit" name="submit" ><i class="fa fa-search w3-margin-right"></i> BOOK NOW </button></p>
 
	
	</form>
	</div>

	</div>
 


     
        

	



<?php
   require_once ('includes/footer.php');
?>