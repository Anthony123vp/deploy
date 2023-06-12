@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/formHorarios.css">
<link rel="stylesheet" type="text/css" href="/css/montserrat-font.css">
<link rel="stylesheet" type="text/css" href="/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
@endsection
@section('content')
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Paciente</h2>
					<div class="form-row">
						<input type="number" name="street" class="street" id="street" placeholder="Dni" required>
					</div>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Nombre" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Apellido Paterno" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Apellido Materno" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Seguro" required>
						</div>
					</div>
					<h2>Servicio</h2>
					<div class="form-row">
						<select name="position">
						    <option value="position">Especialidad</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<select name="position">
						    <option value="position">Tipo de Servicio</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Precio" required>
						</div>
						<div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Servicio</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<br><br>
				</div>
				<div class="form-right">
					<h2>Medico</h2>
					<div class="form-row">
						<select name="position">
						    <option value="position">Seleccione Medico</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Nombres y Apellidos" required>
					</div>
					<div class="form-row">
						<select name="position">
						    <option value="position">Horarios Disponibles</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="imagen">
                        <img src="/Imagenes/medico_reserva.png">
                    </div>
					<div class="form-row-last">
                        <div class="boton">
						    <input type="submit" name="register" class="register" value="Register Badge">
					    </div>
                    </div>
				</div>
			</form>
		</div>
	</div>
@endsection