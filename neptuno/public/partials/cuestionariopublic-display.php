<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public/partials
 */
?>
<div class="row_ipd">
    <!-- This file should primarily consist of HTML with a little bit of PHP. -->
    <h1>CUESTIONARIO DE SEGUIMIENTO</h1>
    <p>(*) Indica que la pregunta es obligatoria.</p>
    <form class="row_ipd example">
        <fieldset class="borde_form">
            <legend>Datos Personales</legend>
            <div class="col-6">
                <label for="fname">(*)Nombre:</label> <br>
                <input type="text" id="fname" name="fname">
            </div>
            <div class="col-6">
                <label for="fpapellido">(*)Primer Apellido:</label><br>
                <input type="text" id="fpapellido" name="fpapellido">
            </div>
            <label for="fsapellido">(*)Segundo Apellido:</label><br>
            <input type="text" id="fsapellido" name="fsapellido"><br>
        
            <label for="fdate">(*)Fecha de Nacimiento:</label><br>
            <input type="date" id="fdate" name="fdate"><br>
        
            <label for="fdni">(*)DNI:</label><br>
            <input type="text" id="fdni" name="fdni"><br>
        </fieldset>
        <fieldset class="borde_form">
            <legend>Cuestionario:</legend>
            
            <p>(*)¿Alergias?:</p>
            <input type="radio" id="alergia1" name="alergia" value="si"><label for="alergia1">Sí</label><br>
            <input type="radio" id="alergia2" name="alergia" value="no"><label for="alergia2">No</label><br>
            
            <p>En caso afirmativo, ¿Cuáles/ A qué?:</p>
            <input type="text" id="falergia" name="falergia"><br>
            
            <p>Convivencia:</p>
            <input type="radio" id="convivencia1" name="convivencia" value="solo"><label for="convivencia1">Solo</label><br>
            <input type="radio" id="convivencia2" name="convivencia" value="pareja"><label for="convivencia2">Pareja</label><br>
            <input type="radio" id="convivencia3" name="convivencia" value="familia"><label for="convivencia3">Familia</label><br>

            <p>Actividad Laboral:</p>
            <input type="radio" id="actividad1" name="actividad" value="si"><label for="actividad1">Si</label><br>
            <input type="radio" id="actividad2" name="actividad" value="no"><label for="actividad2">No</label><br>
            <input type="radio" id="actividad3" name="actividad" value="Jubilado/a"><label for="actividad3">Jubilado/a</label><br>

            <p>Su profesión implica un comportamiento:</p>
            <input type="radio" id="comportamiento1" name="comportamiento" value="sedentario"><label for="comportamiento1">Sedentario(cajero/a - Administrativo/a - Telefonista - Investigador/a)</label><br>
            <input type="radio" id="comportamiento2" name="comportamiento" value="de_pie_estatico"><label for="comportamiento2">De pie estático prolongado(Reponedor/a - Cinta de montaje)</label><br>
            <input type="radio" id="comportamiento3" name="comportamiento" value="combinacion_activo"><label for="comportamiento3">Combinación Activo/Sedentario (Empresario/a - Arquitecto/a - Abogado/a - Médico - Ingeniero/a - Dependiente/a - Fisioterapeuta)</label><br>
            <input type="radio" id="comportamiento4" name="comportamiento" value="fisicamente_exigente"><label for="comportamiento4">Físicamente exigente (Monitor/a de gimnasio - Tareas del hogar - Construcción - Enfermería - Celador)</label><br>

            <p>Práctica actividad física</p>
            <input type="radio" id="actividad_fisica1" name="actividad_fisica" value="si"><label for="actividad_fisica1">Sí</label><br>
            <input type="radio" id="actividad_fisica2" name="actividad_fisica" value="no"><label for="actividad_fisica2">No</label><br>

            <p>En caso afirnativo, ¿Qué deporte practica?</p>
            <p>¿Con qué frecuencia?</p>
            <p>Motivo solicitud Método Pilar Domínguez/Fisioterapia</p>
            <p>Asistencia por indicación médica</p>
            <p>Nombre del doctor/a</p>
            <p>Especialidad del doctor/a</p>
            <p>Antecedentes patológicos</p>
            <p>Responda en caso de haber seleccionado "Enfermedad neurológica en la pregunta anterior</p>
            <p>Diagnóstico</p>
            <p>Actualmente esta en tratamiento para la Osteoporosis</p>
            <p>¿Ha sufrido alguna fractura vertebral osteoporótica?</p>
            <p>Localización de la fractura vertebral osteoporótica</p>
            <p>Intervención quirúrgica de columna cervical por hernia discal o artrosis</p>
            <p>Intervención quirúrgica de columna lumbar por hernia discal o artrosis</p>
            <p>Intervención quirúrgica de columna por escoliosis del adolescente</p>
            <p>Intervención quirúrgica de columna por escoliosis del adulto</p>
            <p>Portador/a de prótesis de cadera</p>
            <p>Portador/a de prótesis de rodilla</p>
            <p>Recibe otro tratamiento en la actualidad() fisioterapia, osteopatía, acupuntura, ... </p>
            <p>¿Precisa tomar analgésico y/o antiinflamantorios?</p>
            <p>Número de comprimidos semanales (escriba solo el número)</p>






        </fieldset>

    </form>
</div>