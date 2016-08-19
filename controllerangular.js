var app = angular.module("AppFnn",[]);
app.controller("PregController",function($scope,$http,$interval){
	$scope.saludo = 'Bienvenido';
	$scope.nuevoproducto = {};
	$scope.productos =[];

	/* Array de Ejemplo
	$scope.productos =[
		{producto:"producto1",categoria:"categoria1",precio:"154.22"},
		{producto:"producto4",categoria:"categoria2",precio:"154.22"},
		{producto:"producto1",categoria:"categoria2",precio:"154.22"},
		{producto:"producto2",categoria:"categoria2",precio:"154.22"},
		{producto:"producto3",categoria:"categoria3",precio:"154.22"},
		{producto:"producto2",categoria:"categoria3",precio:"154.22"}
	];
	*/
//Agregar Producto
$scope.addproducto = function(){
	$scope.productos.push($scope.nuevoproducto);
	$scope.nuevoproducto = {};
}

 $scope.printproductos = function() {
    var text ='';
    angular.forEach($scope.productos, function(value, key){
     	text = text + 'Producto: [' + value.producto + '] ' + ' - categoria: [' + value.categoria + '] ' + 'Precio: [' + value.precio + '] \n '
    });
    return text;
  }


});