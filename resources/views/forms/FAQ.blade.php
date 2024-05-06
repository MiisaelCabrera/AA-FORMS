@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])

    <div class="cuestionario">
        <br>
        <div class="question-block">
            <h2 class="question">¿Qué medios de ayuda tengo disponible para dudas?</h2>
            <p>Puedes recurrir a:<br>
                a. La guía de Green Metric (disponible en el menú "Historial")<br>
                b. Videos explicativos (disponibles para algunas preguntas)<br>
                c. Extensión 7210 o correo <a href="mailto:greenmetric@uaslp.mx">greenmetric@uaslp.mx</a> (dudas respecto al
                cuestionario)<br>
                d. Extensión 7203 o correo <a href="mailto:rtic.ambiental@uaslp.mx">rtic.ambiental@uaslp.mx</a> (soporte
                técnico)<br>
            </p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿A dónde puedo comunicarme cuanto tengo dudas sobre el contenido del cuestionario y la
                perspectiva de las preguntas?</h2>
            <p>Puedes comunicarte a la Ext. 7210 o bien escribir al correo <a
                    href="mailto:greenmetric@uaslp.mx">greenmetric@uaslp.mx</a></p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿A dónde puedo comunicarme cuanto tengo dudas sobre el funcionamiento de la plataforma?</h2>
            <p>Puedes comunicarte a la Ext. 7203 o bien escribir al correo <a
                    href="mailto:rtic.ambiental@uaslp.mx">rtic.ambiental@uaslp.mx</a></p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿La contraseña para acceder a la plataforma es la misma que la de mi correo institucional?
            </h2>
            <p>A pesar de que tu correo institucional es el que te permite acceder a la plataforma, la contraseña es
                <b>exclusiva</b> para este sitio, y se te hizo llegar desde el correo <a
                    href="mailto:rtic.ambiental@uaslp.mx">rtic.ambiental@uaslp.mx</a></p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿Cómo puedo tener la seguridad de que mi evidencia se cargó de forma adecuada?</h2>
            <p>Su evidencia fue cargada correctamente si en la pregunta que se solicita aparece la leyenda <u>"Descargar
                    evidencia"</u>, en la parte superior del botón "Seleccionar archivo".</p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿Cuántas evidencia puedo subir?</h2>
            <p>Solamente podrá cargar un documento en Word por pregunta, si es necesario, puedes reemplazar el documento,
                este no se acumula.</p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿Hasta que fecha podrá realizar modificaciones a la información capturada?</h2>
            <p>Hasta el 17 de junio de 2024.</p>
        </div>
        <br>
        <div class="question-block">
            <h2 class="question">¿Cuándo podré hacer el envío de mi información?</h2>
            <p>El botón "Enviar" se habilitará el 10 de junio, estará ubicado en la parte superior del menú principal, al
                dar clic ya no permitirá la modificación de la información.</p>
        </div>
        <br><br>
    </div>
@endsection
