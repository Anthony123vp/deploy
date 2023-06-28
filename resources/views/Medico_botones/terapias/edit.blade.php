@extends('layoutssistema.navbar')
@section('content')

        <link rel="stylesheet" href="{{ asset('css/recetas_create.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

        <div class='contenedor_todo'>
            <div class='contenedor_todo_2'>
                <div class='contenedor_todo_3'>
                    <form action=" {{ route('terapias.store',$reserva->id_reserva)}}" method="post">
                        @csrf
                        @method('PATCH')
                        
                        <div class='primer_content_form'>
                            <div class='primer_content_1'>
                                <div class='primer_content_1_1'>
                                    <img src="{{ asset('images/logo.png') }}" alt="">
                                    <div class='logo_inicio_'>
                                        <div class='logo_inicio_arriba'>Clinica Medhost</div>
                                        <div class='logo_inicio_abajo'>Grupo ۿquironsalud</div>
                                    </div>
                                </div>
                                <div class='primer_content_1_2'>
                                    <div>Av Javier Padro Este 1066 - San Isidro</div>
                                    <div>Tfno: (+51) 22 422 24</div>
                                    <div>http://wwww.crp.cpm.pe</div>
                                </div>
                                <div class='primer_content_1_3'>
                                    <div>INFORME DE RECETA MEDICA</div>
                                    <div>POSTERIOS A LA CITA</div>
                                </div>
                            </div>
                            <div class='primer_content_2'>
                                <div class='primer_content_2_2 primer_content_2_2_div_1'><b>PACIENTE:</b> {{ $pacientes->nombres }}  {{ $pacientes->ape_paterno }}  {{ $pacientes->ape_materno }}</div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>DNI:</b> {{ $pacientes->dni }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>SEGURO:</b> {{ $seguros->nombre }}</div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>EDAD:</b> {{ $edad }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>SEXO:</b> {{ $pacientes->sexo }}</div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>CONSULTORIO:</b> {{ $reserva->cod_habitacion }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>HC:</b> {{ rand(1000, 5000) }}</div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>FECHA-INICIO:</b> {{ $reserva->fecha }} {{ $reserva->hora_inicio }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>FECHA-FIN:</b> {{ $reserva->fecha }} {{ $horaFin }}</div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class='segundo_content_form'>
                            <div><b>MÉDICO RESPONSABLE: </b>{{ $reserva->medico }}</div>
                            <div><b>ESPECIALIDAD: </b>{{ $reserva->especialidad }}</div>
                            <div><b>SERVICIO: </b>{{ $reserva->servicio }}</div>
                        </div>
                        <hr>
                        <br>
                        <div class='tercero_content_form'>
                            <div class='case1'><b>RESUMEN DE ATENCIÓN</b></div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>OBJETIVOS DEL TRATAMIENTO</b></div>
                                <div class='case2_2'><textarea placeholder='Ingresa los signo vitales del paciente' name="objetivos_tratamiento" id="" require></textarea></div>
                                <input type="hidden" name='id_reserva' value='{{$reserva->id_reserva}}'>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>MODALIDAD DE TERAPIA RECOMENDADA</b></div>
                                <div class='case3_2'><textarea  require placeholder='Ingresa resultado del sistema cardiovascular del paciente' name="modalidad_terapia" id=""></textarea></div>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>FRECUENCIA DE SESIONES</b></div>
                                <div class='case3_2'><textarea  require placeholder='Ingresa resultado del sistema cardiovascular del paciente' name="frecuencia_sesiones" id=""></textarea></div>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>DURACION ESTIMADA DEL TRATAMIENTO</b></div>
                                <div class='case3_2'><textarea require placeholder='Ingresa resultado del sistema gastrointestinal del paciente' name="duracion_tratamiento" id=""></textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>INTERVENCIONES TERAPEUTICAS SUGERIDAD</b></div>
                                <div class='case2_2'><textarea require placeholder='Ingresa resultado del sistema musculoesqueletico del paciente' name="intervenciones_terapeuticas" id=""></textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>RECOMENDACIONES DEL MEDICO</b></div>
                                <div class='case2_2'><textarea require placeholder='Ingresa resultado del sistema nervioso del paciente' name="recomendaciones" id=""></textarea></div>
                            </div><br>
                        </div>
                        <br>
                        <br>
                        <div class='cuarto_content_form'>
                            <div>
                                <b>SIGNOS DE ALARMA</b>
                            </div>
                            <br>
                            <div>
                                Acudir a la Clínica, llamar al teléfono 24.2224/224-2226 o comunicarse con su medico tratante, en caso de presentar cualquiera de estos signos de alarma:
                            </div>
                            <br>
                            <div>
                                DESPUÉS DE UNA SESION MÉDICA, DEBES PRESTAR ATENCIÓN A SIGNOS DE ALARMA COMO DIFICULTAD PARA RESPIRAR, DOLOR INTENSO E INCONTROLABLE, SANGRADO INUSUAL Y FIEBRE ALTA. TAMBIÉN DEBES ESTAR ALERTA A SÍNTOMAS DE INFECCIÓN, CAMBIOS REPENTINOS EN LA VISIÓN O AUDICIÓN, Y REACCIONES ALÉRGICAS GRAVES. SI EXPERIMENTAS ALGUNO DE ESTOS SÍNTOMAS, BUSCA AYUDA MÉDICA DE INMEDIATO.
                            </div>
                        </div>
                        <br>
                        <div class='quinto_content_form'>
                            He comprendido la informacion e instrucciones entregadas por mi médico y se me ha entregado una copia de mi informe de alta en señal de conformidad.
                        </div>
                        <br>
                        <div class="signature">
                            <div>
                                <canvas id="signatureCanvas" name='img_firma_doctor' style="border: 1px dashed #000; width: 100%; height: 150px;"></canvas>
                                <div style='border-bottom:2px solid #000;'>FIRMA Y SELLO DEL MÉDICO A CARGO</div>
                                <div>{{ $reserva->medico }}</div>
                                <div><b>C . M . P: </b> 0000{{ rand(10000000000000000, 500000000000000000) }}0000</div>
                                <img id="signatureImage" src="" alt="Firma" style="display: none;">
                                <input type="hidden" name="firma_base64" id="firma_base64">
                            </div>
                        </div>
                        <br>
                        <div class='enviar_receta'>
                            <button id="btn_receta" type='submit'>
                                Enviar Examen
                            </button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <script>
            function loadImage(url) {
                return new Promise(resolve => {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', url, true);
                    xhr.responseType = "blob";
                    xhr.onload = function (e) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            const res = event.target.result;
                            resolve(res);
                        }
                        const file = this.response;
                        reader.readAsDataURL(file);
                    }
                    xhr.send();
                });
            }

            let signaturePad = null;

        window.addEventListener('load', async () => {
            const canvas = document.getElementById("signatureCanvas");
            canvas.height = canvas.offsetHeight;
            canvas.width = canvas.offsetWidth;

            const signaturePad = new SignaturePad(canvas, {});

            // Obtener referencia al formulario
            const form = document.querySelector('form');

            // Obtener referencia al elemento de imagen
            const signatureImage = document.getElementById('signatureImage');
            const firma_base64 = document.getElementById('firma_base64');

            // Agregar un evento al botón de enviar receta
            document.getElementById('btn_receta').addEventListener('click', () => {
                // Obtener la imagen en formato base64
                const signatureData = signaturePad.toDataURL();

                // Mostrar la firma en el elemento de imagen
                signatureImage.src = signatureData;
                firma_base64.value = signatureData;

                // descargarImagenBase64(signatureData, 'firma.png');

                // Crear un campo oculto en el formulario para almacenar la firma
                const signatureInput = document.createElement('input');
                signatureInput.type = 'hidden';
                signatureInput.name = 'firma';
                signatureInput.value = signatureData;

                // Agregar el campo oculto al formulario
                form.appendChild(signatureInput);

                // Enviar el formulario
                form.submit();
            });

            // function descargarImagenBase64(urlBase64, nombreArchivo) {
            //     const enlaceTemporal = document.createElement('a');
            //     enlaceTemporal.href = urlBase64;
            //     enlaceTemporal.target = '_blank';
            //     enlaceTemporal.download = nombreArchivo || 'imagen.png';
            //     const eventoClic = new MouseEvent('click', {
            //         view: window,
            //         bubbles: true,
            //         cancelable: false
            //     });
            //     enlaceTemporal.dispatchEvent(eventoClic);
            //     }
            });


        </script>
@endsection