@extends('layoutssistema.navbar')
@section('content')

    <div class="main_editar">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Crear Receta</h2>
                    <form action="{{ route('recetas.store') }}" method="POST">
                      @csrf
                  
                      <div class="form-row">
                          <select id="paciente" name="paciente">
                              <option value="position">Seleccione paciente</option>
                              @foreach ($pacientes as $paciente)
                                  <option value="{{ $paciente->id_paciente }}">{{ $paciente->nombres }}</option>
                              @endforeach
                          </select>
                          <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                          </span>
                      </div>
                  
                      <div class="row row-space">
                          <div class="col-6">
                              <div class="input-group">
                                  <input class="input--style-1 js-datepicker" type="text" placeholder="DNI" name="dni">
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                      </div>
                  
                      <div class="row row-space">
                          <div class="col-6">
                              <div class="input-group">
                                  <input class="input--style-1 js-datepicker" type="text" placeholder="Terapias" name="terapias">
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                  
                          <div class="col-6">
                              <div class="input-group">
                                  <input class="input--style-1 js-datepicker" type="text" placeholder="Examenes" name="examenes">
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                      </div>
                  
                      <div class="row row-space">
                          <div class="col-6">
                              <div class="input-group">
                                  <input class="input--style-1 js-datepicker" type="text" placeholder="Medicinas" name="medicinas">
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                  
                          <div class="col-6">
                              <div class="input-group">
                                  <textarea name="comentario" rows="5" placeholder="Comentario"></textarea>
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                      </div>
                  
                      <div class="row row-space">
                          <div class="col-12">
                              <div class="p-t-50">
                                  <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                              </div>
                          </div>
                      </div>
                  </form>
                  
                    
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection