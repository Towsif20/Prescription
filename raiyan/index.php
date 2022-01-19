<!DOCTYPE html>
<html>
<head>
	<title>E-Presciption</title>
	<link rel="stylesheet" href="RafidStyle.css">

 <script type="text/javascript" src="jquery-1.4.2.min_.js"></script>
 <script type="text/javascript" src="jquery.autocomplete.js"></script>
	<script src="RafidJava.js"></script>

	 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("search.php");
 });
 </script>
</head>
<body>

	<!-- <script> checkUser();</script> -->
	

	<h1>Doc-Aid : Prescribe. Anytime. anywhere.</h1>

	<!-- <img src="bg.png" id="logo"> -->

	<div class="container">

		<div>

			<label for="doctorName" id="doctorNameText">  Doctor's name</label> <br>
	    	<input type="text" id="doctorName" name="firstname" placeholder="Dr. ">
			

		</div>

		<div>
			
			<label for="qualification" id="qualificationText">Qualifications</label> <br>
    		<textarea id="qualification" name="qualification" placeholder="" style="height:150px"></textarea>
		</div>


	     

	    <!-- <input type="submit" value="Submit"> -->

	  
	</div> 

	<div class="container2">


		<!-- 1st child container -->
		<!-- <div class="childContainer1">  -->

		<div>

			<label for="patientName">  Patient's name</label> <br>
    		<input type="text" id="patientName" name="patientName" placeholder="">
			

		</div>

			

		<div>

			<label for="patientAge">  Patient's age</label> <br>
    		<input type="number" id="patientAge" name="patientAge" placeholder=""> <br>
			

		</div>


		<div>

			<br>
			<label for="PatientGender">Gender</label> <br>
			<select id="PatientGender" name="PatientGender">
  				<option value="Male">Male</option>
  				<option value="Female">Female</option>
  				<option value="Other">Other</option>
			</select>

		</div>



	  
	</div> 


	<div class="container3">

		<div class="grid-container">

		  <div class="item1">

		  	<div>
			
			<label for="complaints">Chief complaints</label> <br>
    		<textarea id="complaints" name="complaints" placeholder="" style="height:130px"></textarea>
			</div>
		  	

		  </div>


		  <div class="item2">

		  	<div>
			
			<label for="onExamination">On Examination</label> <br>
    		<textarea id="onExamination" name="onExamination" placeholder="" style="height:130px"></textarea>
			</div>
		  	

		  </div>

		  <div class="item3">

		  	<div>
			
			<label for="medicines">Prescribed Medicines</label> <br>
    		<form action="get_form.php">
 Medicine Name : <input type="text" name="q" id="search" placeholder="Enter Med Name">
</form>
			</div>


		  </div>  


		  <div class="item4">

		  	<div>
			
			<label for="advices">Advices</label> <br>
    		<textarea id="advices" name="advices" placeholder="" style="height:130px"></textarea>
			</div>

		  	

		  </div>

		  <div class="item5">
		  	
		  	<div>
			
			<label for="diagnosis">Diagnosis</label> <br>
    		<textarea id="diagnosis" name="diagnosis" placeholder="" style="height:50px"></textarea>
			</div>


		  </div>
		  
		</div>
		


	</div>

	<div class="submit">

		<input type="submit" value="GENERATE E-PRESCRIPTION" id="submitButton">
	
		

	</div>
		
	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="RafidJava.js"></script>


	<script>
	  // Your web app's Firebase configuration
	  var firebaseConfig = {
	    apiKey: "AIzaSyDqwHA9OeO7wMQ4KxystQ2NSheqSCG0Lug",
	    authDomain: "mworldwebsite-ef318.firebaseapp.com",
	    databaseURL: "https://mworldwebsite-ef318.firebaseio.com",
	    projectId: "mworldwebsite-ef318",
	    storageBucket: "mworldwebsite-ef318.appspot.com",
	    messagingSenderId: "754807222674",
	    appId: "1:754807222674:web:1a3217026a59e737e2d14b",
	    measurementId: "G-FFQDZL59YL"
	  };
	  // Initialize Firebase
	  firebase.initializeApp(firebaseConfig);
	  firebase.analytics();
	</script>

</body>
</html>