<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Application</title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

/* button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
} */

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.checkboxdemoSyncing legend code {
  color: #3F51B5;
  font-weight: normal; }

.checkboxdemoSyncing p {
  padding-left: 8px; }

.checkboxdemoSyncing .info {
  padding-left: 13px; }

.checkboxdemoSyncing div.standard {
  padding: 8px;
  padding-left: 15px; }

.checkboxdemoSyncing fieldset.standard {
  border-style: solid;
  border-width: 1px;
  height: 100%; }




</style>
</head>

<?php
$seldate=$_REQUEST['seldate'];
include"db.php";
$sql="SELECT * FROM booking WHERE date='$seldate'";
$a=mysqli_fetch_array(mysqli_query($link,$sql));
 
 if (!$a) {
   echo'<body  >

<div ng-app="myApp2" ng-controller="AppCtrl2"  ng-cloak>
<div align="center"><h3>Book Appointment</h3></div>
<form ng-cloak action="insert.php" method="POST" name="userForm">
 <div class="row">
    <div class="col-md-1">
    </div>
  <div class="col-md-7">
  <br></br>
    <div layout-gt-sm="row">

        <md-input-container class="md-block" flex-gt-sm>
          <label>Name</label>
 <input md-maxlength="30" name="name" required="required" ng-model="user.name" ng-pattern="/^[A-Za-z\s\.]*$/"/>
			<div ng-show="userForm.name.$error.pattern" style="color:red"> Please enter a valid Name </div>
			<div ng-messages="userForm.name.$error" ng-if="showHints">
            <div ng-message="pattern">Name is required.</div>
			</div>
        </md-input-container>

        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>

   <md-input-container class="md-block" flex-gt-sm>
          <label>Phone Number</label>
          <input name="phone" required="required" ng-model="user.phone" ng-pattern="/^\d{10}$/"/>
		  <div ng-show="userForm.phone.$error.pattern" style="color:red"> Please enter a valid phone number </div>
			<div ng-messages="userForm.phone.$error" ng-if="showHints">
            <div ng-message="pattern">Please enter a valid phone number.</div>
          </div>
        </md-input-container>

   

      </div>

      <div layout-gt-sm="row">

    
         <md-input-container class="md-block" flex-gt-sm>
          <label>Reason</label>
          <input md-maxlength="1000" required="required" name="reason" ng-model="user.reason" ng-pattern="/^[A-Za-z\s\.]*$/"/>
			<div ng-show="userForm.reason.$error.pattern" style="color:red"> Please enter Reason </div>
			<div ng-messages="userForm.reason.$error" ng-if="showHints">
            <div ng-message="required">Please enter the reason.</div>
          </div>
        </md-input-container>

        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>

          <md-input-container class="md-block" flex-gt-sm>
          <label>Date</label>
          <input name="social" value="'.$seldate.'" readonly/>
  
         
        </md-input-container>
       

        <style>
          /*
           * The Material demos system does not currently allow targeting the body element, so this
           * must go here in the HTML.
           */
          body[dir=rtl] .hint {
            right: 2px;
            left: auto;
          }
        </style>
      </div>
      
       <div layout-gt-sm="row">
       
       <md-input-container class="md-block" flex-gt-sm>
        
     <input type="radio" name="time" value="1:00PM">1:00PM
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <input type="radio" name="time" value="2:00PM">2:00PM
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         <input type="radio" name="time" value="3:00PM">3:00PM
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <input type="radio" name="time" value="4:00PM">4:00PM
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         
     <input type="radio" name="time" value="5:00PM">5:00PM
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <input type="radio" name="time" value="6:00PM">6:00PM
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         
     <input type="radio" name="time" value="7:00PM">7:00PM
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
           <input type="radio" name="time" value="8:00PM">8:00PM
        </md-input-container>
       </div>


       

  </div>


  <div class="col-md-4">
  <br><br>
   <div class="card" >
  <img src="images/doc.jpg" alt="John" style="width:100%;height:100%">
  <h1>Divya</h1>
  <p class="title">Neurosurgeon</p>
  <p>Harvard University</p>
  
</div>
  </div>
  
</div>
 </md-dialog-content>

    <md-dialog-actions layout="row">
    
      <span flex></span>
      
      <md-button type="submit"  class="md-warn">
        Book Appointment
      </md-button>
    </md-dialog-actions>
  </form>
</md-dialog>
</div>




</body>';
 }
 else
  
{ 

echo'<body  >

<div ng-app="myApp2" ng-controller="AppCtrl2"  ng-cloak>
<div align="center"><h3>Book Appointment</h3></div>
<form ng-cloak action="update.php" method="POST" name="userForm">
 <div class="row">
    <div class="col-md-1">
    </div>
  <div class="col-md-7">
  <br></br>
    <div layout-gt-sm="row">
	
	<div class="col-md-5">
		<div class="form-group">
			<label>Name:</label>
			<input value="'.$a['name'].'" name="name" required="required" style="width:100%" ng-pattern="/^[A-Za-z\s\.]*$/"/>
			<div ng-show="userForm.name.$error.pattern" style="color:red"> Please enter a valid Name </div>
	</div>
	</div>

	<div class="col-md-5">
		<div class="form-group">
			<label>Phone:</label>
			<input value="'.$a['phone'].'" name="phone" required="required" style="width:100%"/>
		</div>
	</div>

      </div>

      <div layout-gt-sm="row">

		<div class="col-md-5">
		<div class="form-group">
			<label>Reason:</label>
			<input value="'.$a['reason'].'" name="reason" required="required" style="width:100%"/>
		</div>
	</div>

	<div class="col-md-5">
		<div class="form-group">
			<label>Date:</label>
			<input name="social" value="'.$seldate.'" readonly style="width:100%"/>
		</div>
	</div>
       

        <style>
          /*
           * The Material demos system does not currently allow targeting the body element, so this
           * must go here in the HTML.
           */
          body[dir=rtl] .hint {
            right: 2px;
            left: auto;
          }
        </style>
      </div>';



      echo'<div layout-gt-sm="row">


      <md-input-container class="md-block" flex-gt-sm>
         <input type="radio" name="time" value="1:00PM"';if($a['time']=="1:00PM") { echo'checked="checked"';} echo'>1:00PM
     
       </md-input-container>
       
       <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>';
        
        echo'<md-input-container class="md-block" flex-gt-sm>
          <input type="radio" name="time" value="2:00PM"';if($a['time']=="2:00PM") { echo'checked="checked"';} echo'>2:00PM
        </md-input-container>
       </div>';
       
           echo'<div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
        <input type="radio" name="time" value="3:00PM"';if($a['time']=="3:00PM") { echo'checked="checked"';} echo'>3:00PM
     
       </md-input-container>';
       
        echo'<div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>';
        
       echo' <md-input-container class="md-block" flex-gt-sm>
            <input type="radio" name="time" value="4:00PM"';if($a['time']=="4:00PM") { echo'checked="checked"';} echo'>4:00PM
        </md-input-container>
       </div>';
       
           echo'<div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         <input type="radio" name="time" value="5:00PM"';if($a['time']=="5:00PM") { echo'checked="checked"';} echo'>5:00PM
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>';
        
        echo'<md-input-container class="md-block" flex-gt-sm>
            <input type="radio" name="time" value="6:00PM"';if($a['time']=="6:00PM") { echo'checked="checked"';} echo'>6:00PM
        </md-input-container>
       </div>';
       
           echo'<div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         <input type="radio" name="time" value="7:00PM"';if($a['time']=="7:00PM") { echo'checked="checked"';} echo'>7:00PM
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>';
        
        echo'<md-input-container class="md-block" flex-gt-sm>
           <input type="radio" name="time" value="8:00PM"';if($a['time']=="8:00PM") { echo'checked="checked"';} echo'>8:00PM
        </md-input-container>
       </div>
       

  </div>
  <div class="col-md-4">
  <br><br>
   <div class="card" >
  <img src="images/doc.jpg" alt="John" style="width:100%;height:100%">
  <h1>Divya</h1>
  <p class="title">Neurosurgeon</p>
  <p>Harvard University</p>
  
</div>
  </div>
  
</div>
 </md-dialog-content>

    <md-dialog-actions layout="row">
    
      <span flex></span>
     
      <md-button type="submit"  class="md-warn">
        Update Appointment
      </md-button>
    </md-dialog-actions>
  </form>
</md-dialog>
</div>




</body>';

}

?>

<script>
var app = angular.module("myApp2", ['ngMaterial']);

app.controller("AppCtrl2", function($scope) {
  $scope.mdDialogSelect= window.localStorage.getItem("dateId");
});

</script>

</html>