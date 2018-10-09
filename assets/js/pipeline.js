var mainApp = angular.module("myApp", ['ngRoute','ngResource','ui.sortable','ngCookies']);
mainApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/PipeLine/:pipelineid', {
        templateUrl: 'pipeline.php',
      }).
      when('/PipeLine/1',{
        templateUrl: 'pipeline.php',
      });
  }]);

// For listing pipelines
mainApp.controller('pipelineCtrl', function($scope, $http,$rootScope) {
  $scope.get_pipelines = function(){
  	$http.get("services/get_pipeline.php?agent_id=3887")
    .then(function(response) {
        $scope.pipelines = response.data;
        //$scope.activeMenu = $scope.pipelines[0];
   		  $scope.setActive = function(menuItem) {
    		  $scope.activeMenu = menuItem
 		    }
    });
  }

   $rootScope.$on('reloadPipelines', function(event, message) {
      $scope.get_pipelines();
    });
});

/* For adding new pipline */
mainApp.controller('addPipelintCtrl', function($scope,$http) {
  $scope.pipelineName = "";
	$scope.showPipeLineForm = false;
    $scope.showAddPipleLine = true;
    $scope.toggleAddPipleLineForm = function() {
     	$scope.showAddPipleLine = false;
        $scope.showPipeLineForm = !$scope.showPipeLineForm;
    };
    $scope.savePipeline = function(){  
    	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
           $http.post(  
                "services/insert_pipeline.php",  
                'name='+$scope.pipelineName+'&agent_id='+$scope.agentID
           ).then(function(data){  
              $scope.$emit('reloadPipelines');
           		$scope.pipelineName = "";
           		$scope.showPipeLineForm = false;
    			    $scope.showAddPipleLine = true;
           });  
      }
 });

// For listing pipelines
mainApp.controller('pipelineColCtrl', function($scope, $http,$routeParams,$rootScope ,$cookies) {
    if($cookies.get('listViewCookie') == 'true'){
      $scope.ShowListView = true;
      $scope.ShowColView = false;
    } else {
      $scope.ShowListView = false;
      $scope.ShowColView = true;
    }


    $scope.pipline_id = $routeParams.pipelineid;
    var myEl = angular.element( document.querySelector( '.set_pipeline_col_id' ) );
    myEl.attr('id',$scope.pipline_id);
  	$http.get("services/get_pipeline_col.php?pipeline_id="+$scope.pipline_id)
    .then(function(response) {
       $scope.pipeline_cols = response.data.data;
    });
    $rootScope.$on('setPipleColView', function(event, message) {
      $scope.ShowListView = listView;
      $scope.ShowColView = ColView;
    });
});

mainApp.controller('pipelineColViewSearch', function($scope, $http ,$cookies) {

   // Set Active Class
     if($cookies.get('listViewCookie') == 'true'){
         $scope.activeMenuForView = 'list';
      } else if($cookies.get('ColViewCookie') == 'true') {
        $scope.activeMenuForView = 'column';
      } else {
         $scope.activeMenuForView = 'column';
      }

   $scope.pipelineView = function(viewType){
    if(viewType == 'list'){
        listView = true;
        ColView = false;
      } else {
        listView = false;
        ColView = true;
     }

    $scope.activeMenuForView = viewType;
     // Setting a cookie for View
    $cookies.put('listViewCookie', listView);
    $cookies.put('ColViewCookie', ColView);
    $scope.$emit('setPipleColView',listView,ColView );
   }
});

// Create Directive to add netstable JS
mainApp.directive("dd", function() {
    return {
      restrict: "C",
      link: function(scope, element, attrs) {
        element.nestable();
      }
    }
});

// Create Directive to add Cololr piker in Dom
mainApp.directive("flat", function() {
    return {
      restrict: "C",
      link: function(scope, element, attrs) {
        element.spectrum();
      }
    }
});

// For Lead pipelines Setting
mainApp.controller('pipelineColSetting', function($scope, $http,$routeParams ,$route) {
  
  $scope.showPipelineTitleForm = true;
  $scope.showpipelineTitleANdOperation = true;
  $scope.showPipeLineTitleError = true;
  $scope.showAddPipeLineCol = false;
  // Get Pipleline cols
  $scope.get_pipeline_cols = function () {
    var myEl = angular.element( document.querySelector( '.set_pipeline_col_id' ) );
    var x = myEl.attr('id');
    $http.get("services/get_pipeline_col.php?pipeline_id="+x)
    .then(function(response) {
      $scope.pipline_name =  response.data.pipeline_name;
      $scope.pipeline_setting_cols = response.data.data;
    });
  }

  /* Edit Pipeline cols*/
  $scope.editPipelinCol = function(id){
    var myElShow = angular.element( document.querySelector( '#showColName_'+id ) );
    myElShow.removeClass("d-flex");
    myElShow.hide();
    var myEditElShow = angular.element( document.querySelector( '#showEditColName_'+id ) );
    myEditElShow.show();
  }

  $scope.editPipelinCancel = function(id){
    var myElShow = angular.element( document.querySelector( '#showColName_'+id ) );
    myElShow.addClass("d-flex");
    myElShow.show();
    var myEditElShow = angular.element( document.querySelector( '#showEditColName_'+id ) );
    myEditElShow.hide();
  }

  /* Submit Form*/
  $scope.submit_pipeline_col_form = function (x) {
    var myEl = angular.element( document.querySelector( '.set_pipeline_col_id' ) );
    var pipe_id = myEl.attr('id');
    var el_col_name = angular.element( document.querySelector( '#p_column_name_'+x ) );
    var el_pipline_id = angular.element( document.querySelector( '#p_pipline_id_'+x ) );
    var el_pipline_color = angular.element( document.querySelector( '#p_pipline_color_'+x ) );

    if(el_col_name.val() == ''){
      $("#angular_error_"+x).show();
      return false;
    }
    
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    color_code =  $('#p_pipline_color_'+x).spectrum('get').toHexString();
    $http.post( "services/edit_save_pip_col.php",  
                'name='+el_col_name.val()+'&pipline_col_id='+el_pipline_id.val()+'&pipeline_color='+color_code+"&pipline_id="+pipe_id)
    .then(function(response) {
    $scope.get_pipeline_cols(); 
        /* Reload data*/
     $route.reload();
    });
  }

  $scope.edit_pipeline_title = function (){
    $scope.showPipelineTitleForm = false;
    $scope.showpipelineTitleANdOperation = false;
  }

  $scope.showAddColForm = function(x){
    if(x==1){$scope.showAddPipeLineCol = true;} else {$scope.showAddPipeLineCol = false;$scope.pipelineColName = '';
      $scope.addPipeLineCol.$setUntouched();
      $scope.addPipeLineCol.$setValidity();
      $scope.addPipeLineCol.$setPristine();}
  }

  $scope.update_pipeline_title = function(){
    var myEl = angular.element( document.querySelector( '.set_pipeline_col_id' ) );
    var pipe_id = myEl.attr('id');
    var el_pipline_title = angular.element( document.querySelector( '#Pipeline-title') );
    if(el_pipline_title.val() == ''){
      $scope.showPipeLineTitleError = false;
      return false;
    }
    
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    $http.post( "services/edit_save_pip_col_title.php",  
                'name='+el_pipline_title.val()+'&id='+pipe_id)
    .then(function(response) {
      $scope.showPipelineTitleForm = true;
      $scope.showpipelineTitleANdOperation = true;
      $scope.showPipeLineTitleError = true;
      $scope.pipline_name =  response.data;
      // Reload Pipelines List
      $scope.$emit('reloadPipelines');
        /* Reload data*/
        $route.reload();
    });
  }

  /* Save New Colunm */
  $scope.savePipelineCol = function(){
    color_code =  $('#piplineColorCode').spectrum('get').toHexString();
    var myEl = angular.element( document.querySelector( '.set_pipeline_col_id' ) );
    var pipe_id = myEl.attr('id');
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
           $http.post(  
                "services/edit_save_pip_col.php",  
                'name='+$scope.pipelineColName+'&pipeline_color='+color_code+"&pipline_id="+pipe_id)
           .then(function(data){
          $scope.pipelineColName = '';
          $scope.addPipeLineCol.$setUntouched();
          $scope.addPipeLineCol.$setValidity();
          $scope.addPipeLineCol.$setPristine();
          $scope.showAddPipeLineCol = false;
          $scope.get_pipeline_cols();  
          $route.reload();
    });
  }

  $scope.sortableColOptions = {
  placeholder : "ui-state-highlight",
  update  : function(event, ui) {
        var col_id_array = new Array();
        $("#colunm_list li").each(function(){
          console.log("honey");
          col_id_array.push($(this).attr("id"));
        });
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
           $http.post(  
                "services/sort_pipeline_col.php",  
                'col_id_array='+col_id_array)
           .then(function(data){
          $scope.get_pipeline_cols();  
          $route.reload();
    });
    },
   stop: function(e, ui) {
     //console.log("Honey");
   }
};

});
