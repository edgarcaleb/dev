var apps = angular.module('app', ['ngRoute']);

apps.config(function ($routeProvider) {
    
    // set up routing
	$routeProvider
		.when('/CreateService', {
		 templateUrl : 'view/form.service.php'
		})
		.when('/Alumnos2', {
		 templateUrl : 'template/include/estudiante/index.php'
		})
		.when('/CrearUsers', {
		 templateUrl : 'view/form.user.php'
		})
		.when('/CreateProfile', {
		 templateUrl : 'view/form.perfil.php'
		})
        .when('/VisorAlumnos', {
		 templateUrl : 'template/include/estudiante/visor.php'
		})
        .when('/Visor_post_Alumnos', {
		 templateUrl : 'template/include/estudiante/visor_post_alumnos.php'
		})
		.otherwise({ redirectTo: '',
			templateUrl : 'template/include/home/index.php',
	});

});