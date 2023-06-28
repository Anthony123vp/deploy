@extends('layoutssistema.navbar')
@section('content')

        <link rel="stylesheet" href="{{ asset('css/recetas_create.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

        <div class='contenedor_todo'>
            <div class='contenedor_todo_2'>
                <div class='contenedor_todo_3'>
                    
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
                                <div class='primer_content_2_2 primer_content_2_2_div_1'><b>PACIENTE:</b> {{ $reserva->paciente}}</div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>DNI:</b> {{ $reserva->dni }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>SEGURO:{{ $reserva->seguro }}</b></div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>EDAD:</b> {{ $reserva->edad }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>SEXO:</b> {{ $reserva->sexo }}</div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>CONSULTORIO:</b> {{ $reserva->cod_habitacion }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>HC:</b> {{ rand(1000, 5000) }}</div>
                                </div>
                                <div class='primer_content_2_2 primer_content_2_2_div_2'>
                                    <div class='primer_content_2_2_div_2_1'><b>FECHA-INICIO:</b>{{ date( "d/m/Y", strtotime($reserva->fecha))}}-{{ date( "g:i a", strtotime( $reserva->hora_inicio)) }}</div>
                                    <div class='primer_content_2_2_div_2_1'><b>FECHA-FIN:</b> {{ date( "d/m/Y", strtotime($reserva->fecha))}}-{{ date( "g:i a", strtotime( $reserva->hora_final)) }}</div>
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
                                <div class='case2_1'><b>MOTIVO DE INGRESO</b></div>
                                <div class='case2_2'><textarea placeholder='Ingresa el motivo de ingreso del paciente' readonly name="motivo_ingreso" id="" require>{{$resultado->motivo_ingreso}}</textarea></div>
                                <input type="hidden" name='id_reserva'readonly  value='{{$reserva->id_reserva}}'>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>DIAGNOSTICO DE INGRESO</b></div>
                                <div class='case3_2'><textarea  require placeholder='Ingresa el diagnostico de ingreso del paciente' readonly name="diagnostico_ingreso" id="">{{$resultado->diagnostico_ingreso}}</textarea></div>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>COMORBILIDADES</b></div>
                                <div class='case3_2'><textarea require placeholder='Ingresa comorbilidades del paciente' readonly name="comorbilidades" id="">{{$resultado->comorbilidades}}</textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>PROCEDIMIENTOS</b></div>
                                <div class='case2_2'><textarea require placeholder='Ingresa los procedimientos durante la cita' readonly name="procedimientos" id="">{{$resultado->procedimientos}}</textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>MEDICAMENTOS RECIBIDOS</b></div>
                                <div class='case2_2'><textarea require placeholder='Ingresa los medicamentos recibidos durante la cita' readonly name="medicamentos_recibidos" id="">{{$resultado->medicamentos_recibidos}}</textarea></div>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>COMENTARIOS DEL DOCTOR</b></div>
                                <div class='case3_2'><textarea require placeholder='Ingresa comentarios sobre el paciente'  readonly name="comentario_doctor" id="">{{$resultado->comentario_doctor}}</textarea></div>
                            </div><br>
                            <div class='case3'>
                                <div class='case3_1'><b>Estado del paciente</b></div>
                                <div class='case3_2'><textarea require  placeholder='Ingresar estado del paciente' readonly name="estado_paciente" id="">{{$resultado->estado_paciente}}</textarea></div>
                            </div><br>
                            <div class='case1'><b>INSTRUCCIONES DE SEGUIMIENTO</b></div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>MEDICAMENTOS PARA CASA</b></div>
                                <div class='case2_2'><textarea placeholder='Ingresar medicamentos requeridos para el paciente'  readonly name="medicamentos_casa" id="">{{$resultado->medicamentos_casa}}</textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>TERAPIAS REQUERIDAS</b></div>
                                <div class='case2_2'><textarea placeholder='Ingresar terapias requeridos para el paciente' readonly name="terapias" id="">{{$resultado->terapias}}</textarea></div>
                            </div><br>
                            <div class='case2'>
                                <div class='case2_1'><b>EXAMENES REQUERIDAS</b></div>
                                <div class='case2_2'><textarea placeholder='Ingresar exámenes requeridos para el paciente' readonly name="examenes" id="">{{$resultado->examenes}}</textarea></div>
                            </div>
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
                                DESPUÉS DE UNA CITA MÉDICA, DEBES PRESTAR ATENCIÓN A SIGNOS DE ALARMA COMO DIFICULTAD PARA RESPIRAR, DOLOR INTENSO E INCONTROLABLE, SANGRADO INUSUAL Y FIEBRE ALTA. TAMBIÉN DEBES ESTAR ALERTA A SÍNTOMAS DE INFECCIÓN, CAMBIOS REPENTINOS EN LA VISIÓN O AUDICIÓN, Y REACCIONES ALÉRGICAS GRAVES. SI EXPERIMENTAS ALGUNO DE ESTOS SÍNTOMAS, BUSCA AYUDA MÉDICA DE INMEDIATO.
                            </div>
                        </div>
                        <br>
                        <div class='quinto_content_form'>
                            He comprendido la informacion e instrucciones entregadas por mi médico y se me ha entregado una copia de mi informe de alta en señal de conformidad.
                        </div>
                        <br>
                        <div class="signature">
                            <div>
                                <img src="/firmas_imagenes/{{$resultado->img_firma_doctor}}"></img>
                                <div style='border-bottom:2px solid #000;'>FIRMA Y SELLO DEL MÉDICO A CARGO</div>
                                <div>{{ $reserva->medico }}</div>
                                <div><b>C . M . P: </b> 0000{{ rand(10000000000000000, 500000000000000000) }}0000</div>
                                <input type="text" name="firma_base64" id="firma_base64">
                            </div>
                        </div>
                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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