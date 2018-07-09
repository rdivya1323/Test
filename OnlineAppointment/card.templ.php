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
<script src="js/app.js" ></script>
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

<body  class="bg" >

<div ng-app="myApp2" ng-controller="AppCtrl2"  ng-cloak>

<md-dialog aria-label="Doctor's Appointment" style="width:100%">
  <form ng-cloak>
    <md-toolbar>
      <div class="md-toolbar-tools">
        <h2>Doctor's Appointment</h2>
        <span flex></span>
        <md-button class="md-icon-button" ng-click="cancel()">
          <md-icon md-svg-src="images/cancel.svg" aria-label="Close dialog"></md-icon>
        </md-button>
      </div>
    </md-toolbar>

    <md-dialog-content>
    
    <div class="row">
    <div class="col-md-1">
    </div>
  <div class="col-md-7">
  <br></br>
    <div layout-gt-sm="row">

        <md-input-container class="md-block" flex-gt-sm>
          <label>Name</label>
          <input md-maxlength="30" required name="name" ng-model="user.name" ng-nameregex="/^[A-Za-z']+( [A-Za-z']+)*$/"/>

          <div ng-show="userForm.name.$error">Name is required.</div>

          <div ng-messages="userForm.name.$error" >
            <div ng-message="required">Name is required.</div>
           
          </div>
        </md-input-container>

        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>

   <md-input-container class="md-block" flex-gt-sm>
          <label>Phone Number</label>
          <input name="phone" ng-model="user.phone" ng-pattern="/^d{10}$/" />

          <div class="hint" ng-show="showHints">(###) ###-####</div>

          <div ng-messages="userForm.phone.$error" ng-hide="showHints">
            <div ng-message="pattern">(###) ###-#### - Please enter a valid phone number.</div>
          </div>
        </md-input-container>

   

      </div>

      <div layout-gt-sm="row">

    
         <md-input-container class="md-block" flex-gt-sm>
          <label>Reason</label>
          <input md-maxlength="1000" required name="reason" ng-model="user.reason" />

          

          <div ng-messages="userForm.reason.$error" ng-if="!showHints">
            <div ng-message="required">Reason is required.</div>
           
          </div>
        </md-input-container>

        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>

          <md-input-container class="md-block" flex-gt-sm>
          <label>Date</label>
          <input name="social" ng-model="mdDialogSelect" readonly/>
	
         
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
         <md-checkbox ng-model="data.cb1" aria-label="Checkbox 1">
            10:00 AM
          </md-checkbox>
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <md-checkbox ng-model="data.cb2" aria-label="Checkbox 1">
           10:30 PM
          </md-checkbox>
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         <md-checkbox ng-model="data.cb3" aria-label="Checkbox 1">
            11:00 AM
          </md-checkbox>
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <md-checkbox ng-model="data.cb4" aria-label="Checkbox 1">
           11:30 PM
          </md-checkbox>
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         <md-checkbox ng-model="data.cb5" aria-label="Checkbox 1">
            12:00 AM
          </md-checkbox>
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <md-checkbox ng-model="data.cb6" aria-label="Checkbox 1">
           12:30 PM
          </md-checkbox>
        </md-input-container>
       </div>
       
           <div layout-gt-sm="row">
       <md-input-container class="md-block" flex-gt-sm>
         
     
       </md-input-container>
       
        <div flex="5" hide-xs hide-sm>
          <!-- Spacer //-->
        </div>
        
        <md-input-container class="md-block" flex-gt-sm>
            <md-checkbox ng-model="data.cb7" aria-label="Checkbox 1">
            01:00 PM
          </md-checkbox>
        </md-input-container>
       </div>
       

  </div>
  <div class="col-md-4">
   <div class="card pull-right" >
  <img src="images/doc.jpg" alt="John" style="width:100%;height:50%">
  <h1>Divya</h1>
  <p class="title">Neurosurgeon</p>
  <p>Harvard University</p>
  
</div>
  </div>
  
</div>
    
    


    </md-dialog-content>

    <md-dialog-actions layout="row">
    
      <span flex></span>
      <md-button ng-click="answer('not useful')" class="md-primary">
       May Be Later!
      </md-button>
      <md-button ng-click="answer('useful')" class="md-warn">
        Book Appointment
      </md-button>
    </md-dialog-actions>
  </form>
</md-dialog>
 	

</div>




</body>
<script>
var app = angular.module("myApp2", []);

app.controller("AppCtrl2", function($scope) {
  $scope.mdDialogSelect= window.localStorage.getItem("dateId");
});

</script>

</html>