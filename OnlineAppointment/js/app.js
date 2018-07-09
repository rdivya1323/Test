
var app = angular.module("myApp", ['ngMaterial', 'ngMessages']);
app.controller("AppCtrl", function($scope,$mdDialog,$rootScope) {
	$scope.myDate1 = new Date();
	this.myDate2 = new Date();
	
	 
	
	$scope.totalDays=28;
	
	$scope.getNumber = function(num) {
	    return new Array(num);   
	}
	
	$scope.pickDates=function(referenceDate,index){
		
	
    var startDate = new Date(Date.parse(referenceDate));
   
    var expDate = startDate;
    expDate.setDate(startDate.getDate() + index);
 
return expDate

	};
	$scope.angularswitch=function(switchDate){
		
		if(switchDate === 6 || switchDate === 13 || switchDate === 20  ){
			return true;
		}	
		
	
		
	}
	function DialogController($scope, $mdDialog,dataToPass) {
		$scope.mdDialogSelect = dataToPass 
	    $scope.hide = function() {
	      $mdDialog.hide();
	    };
	    $scope.cancel = function() {
	        $mdDialog.cancel();
	       
	      };

	      $scope.answer = function(answer) {
	        $mdDialog.hide(answer);
	      };
	    };
	
		$scope.showAdvanced = function(ev,dt) {
			
			window.localStorage.setItem("dateId",dt);
			
			window.location.href = 'card.templ.html';
			
			/*console.log($scope.selectedDateAp)
		    $mdDialog.show({
		    	 locals:{dataToPass:$scope.selectedDateAp},
		      controller: DialogController,
		      templateUrl: 'card.templ.php',
		      parent: angular.element(document.body),
		    
		      clickOutsideToClose:true,
		      fullscreen: $scope.customFullscreen // Only for -xs, -sm breakpoints.
		    })
		    .then(function(answer) {
		      $scope.status = 'You said the information was "' + answer + '".';
		    }, function() {
		      $scope.status = 'You cancelled the dialog.';
		    });
		  };*/
		
	};
	
})
app.config(['$qProvider', function ($qProvider) {
    $qProvider.errorOnUnhandledRejections(false);
}])
.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('dark-grey').backgroundPalette('grey').dark();
  $mdThemingProvider.theme('dark-orange').backgroundPalette('orange').dark();
  $mdThemingProvider.theme('dark-purple').backgroundPalette('deep-purple').dark();
  $mdThemingProvider.theme('dark-blue').backgroundPalette('blue').dark();
});

