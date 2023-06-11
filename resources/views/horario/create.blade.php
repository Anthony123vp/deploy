@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/formHorarios.css">
@endsection
@section('content')
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="{{ route('Horario.store')}}" method="post" id="myform">
			@csrf
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<input type="date" name="fecha">
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="time" id="appt" name="hora_inicio"  required>
						</div>
						<div class="form-row form-row-2">
							<input type="time" id="appt" name="hora_final" required>
						</div>
					</div>
                    <div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register Badge">
					</div>
				</div>
				<div class="form-right">
					
				</div>
			</form>
		</div>
	</div>
@endsection