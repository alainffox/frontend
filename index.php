<html ng-app="AppFnn">
<head>
	<title>test-form-ejercicio2</title>
<!-- Libreria Angular JS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="controllerangular.js"></script>
</head>
<body ng-controller="PregController">
<div class="content-body">
	{{saludo}}

	<form>
		<fieldset>
			<p>
				<label for="producto">Nombre del Producto</label>
				<input type="text" id="producto" ng-model="nuevoproducto.producto">
			</p>
			<p>
				<label for="categoria">Nombre de la Categoria</label>
				<input type="text" id="categoria" ng-model="nuevoproducto.categoria">
			</p>
			<p>
				<label for="precio">Precio S/.</label>
				<input type="number" id="precio" ng-model="nuevoproducto.precio">
			</p>
			<p>
				<button id="registrar" class="btn btn-primary" ng-click="addproducto()">Registrar</button>
			</p>
		</fieldset>
		<hr>
		<textarea id="registroProducto" cold="750" rows="15">				
				{{printproductos()}}	
		</textarea>
		<hr>
		<button id="total_categorias" ng-click="example1 = !example1" ng-init="!example1">Categorias registradas</button>
		<button id="total_productos" ng-click="example2 = !example2" ng-init="!example2">Total de Productos registrados</button>
		<button id="suma_productos" ng-click="example3 = !example3" ng-init="!example3">Suma del precio de productos</button>

		<div class="content-resultados">
			<div class="classboolcatreg" ng-show="example1">
				<div ng-repeat="producto in productos | orderBy: 'producto'">
					{{producto.producto}} - {{producto.precio}}
				</div>
			</div>

			<div class="classboolcatreg" ng-show="example2">
				<div>
					Actualmente, {{productos.length}} Productos registrados
				</div>
			</div>

			<div class="classboolcatreg" ng-show="example3">
				Filtro de categorias: <input ng-model='filterExpr'>
					<ul>
			          <li ng-repeat='producto in filtered = (productos | filter:filterExpr) track by $index'>{{producto.categoria}} - {{producto.producto}}</li>
			      	</ul>
			    Actualemnte existen {{filtered.length}} productos en categoria
			</div>

		</div>
	</form>
</div>



<!-- BootStrap - Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>