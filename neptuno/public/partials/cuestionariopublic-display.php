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
    <form class="example">
        <fieldset class="borde_form">
            <legend>TEST 1 - Test de Seguimiento:</legend>
            <div class="col-6">
                <label for="alergia"><strong>1. ¿Alergias?:</strong></label></br>
                <input type="radio" id="alergia" name="alergia" value="si"><label for="alergia1">Sí</label></br>
                <input type="radio" id="alergia" name="alergia" value="no"><label for="alergia2">No</label></br>
            </div>
            <div class="col-6">
                <label for=""><strong>1.1 En caso afirmativo, ¿Cuáles/ A qué?:</strong></label></br>
                <input type="text" id="namelergia" name="falergia"><br>
            </div>
            <div class="col-12">
                <label for=""><strong>2. Convivencia:</strong></label></br>
                <input type="radio" id="convivencia1" name="convivencia" value="solo"><label for="convivencia1">Solo</label><br>
                <input type="radio" id="convivencia2" name="convivencia" value="pareja"><label for="convivencia2">Pareja</label><br>
                <input type="radio" id="convivencia3" name="convivencia" value="familia"><label for="convivencia3">Familia</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>3. Actividad Laboral:</strong></label></br>
                <input type="radio" id="actividad1" name="actividad" value="si"><label for="actividad1">Si</label><br>
                <input type="radio" id="actividad2" name="actividad" value="no"><label for="actividad2">No</label><br>
                <input type="radio" id="actividad3" name="actividad" value="Jubilado/a"><label for="actividad3">Jubilado/a</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>3.1 Su profesión implica un comportamiento:</strong></label></br>
                <input type="radio" id="comportamiento1" name="comportamiento" value="sedentario"><label for="comportamiento1">Sedentario(cajero/a - Administrativo/a - Telefonista - Investigador/a)</label><br>
                <input type="radio" id="comportamiento2" name="comportamiento" value="de_pie_estatico"><label for="comportamiento2">De pie estático prolongado(Reponedor/a - Cinta de montaje)</label><br>
                <input type="radio" id="comportamiento3" name="comportamiento" value="combinacion_activo"><label for="comportamiento3">Combinación Activo/Sedentario (Empresario/a - Arquitecto/a - Abogado/a - Médico - Ingeniero/a - Dependiente/a - Fisioterapeuta)</label><br>
                <input type="radio" id="comportamiento4" name="comportamiento" value="fisicamente_exigente"><label for="comportamiento4">Físicamente exigente (Monitor/a de gimnasio - Tareas del hogar - Construcción - Enfermería - Celador)</label><br>
            </div>

            <div class="col-3">
                <label for=""><strong>4. Práctica actividad física</strong></label></br>
                <input type="radio" id="actividad_fisica1" name="actividad_fisica" value="si"><label for="actividad_fisica1">Sí</label><br>
                <input type="radio" id="actividad_fisica2" name="actividad_fisica" value="no"><label for="actividad_fisica2">No</label><br>
            </div>
            <div class="col-6">
                <label for=""><strong>4.1 En caso afirnativo, ¿Qué deporte practica?</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Deportes de equipo (baloncesto, fútbol, volleyball, waterpolo, balonmano, hockey, Rugby, ...)</label><br>
                <input type="radio" id="" name="" value=""><label for="">Deportes de raqueta (tenis, padel, squatx)</label><br>
                <input type="radio" id="" name="" value=""><label for="">Deportes individuales (ciclismo, esquí, golf, boxeo, hipica, esgrim)</label><br>
                <input type="radio" id="" name="" value=""><label for="">Natación</label><br>
                <input type="radio" id="" name="" value=""><label for="">Gimnasio (pesas, crossfit, zumba, bodypump)</label><br>
                <input type="radio" id="" name="" value=""><label for="">Pilates, Yoga, Taichi</label><br>
                <input type="radio" id="" name="" value=""><label for="">Correr, Marcha Nordica</label><br>
                <input type="radio" id="" name="" value=""><label for="">Caminar (paseo)</label><br>
            </div>

            <div class="col-3">
                <label for=""><strong>4.2 ¿Con qué frecuencia?</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">1/2 veces por semana.</label><br>
                <input type="radio" id="" name="" value=""><label for="">3/4 veces por semana.</label><br>
                <input type="radio" id="" name="" value=""><label for="">5/o más veces por semana.</label><br>
            </div>
            <div class="col-8">
                <label for=""><strong>5. Motivo solicitud Método Pilar Domínguez/Fisioterapia</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Dolor cervical</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor dorsal</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor lumbar</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor en más de una región de columna</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor cadera/s</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor rodilla/s</label><br>
                <input type="radio" id="" name="" value=""><label for="">Dolor en alguna región columna o rodilla</label><br>
                <input type="radio" id="" name="" value=""><label for="">Escoliosis Infantil/Adolescente</label><br>
            </div>

            <div class="col-4">
                <label for=""><strong>6. Asistencia por indicación médica</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-6">
                <label for=""><strong>7. Nombre del doctor/a</strong></label></br>
                <input type="text" id="" name=""><br>
            </div>
            <div class="col-6">
                <label for=""><strong>7.1 Especialidad del doctor/a</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Traumatologia</label><br>
                <input type="radio" id="" name="" value=""><label for="">Neurológia</label><br>
                <input type="radio" id="" name="" value=""><label for="">Medicina Física y Rehabilitación</label><br>
                <input type="radio" id="" name="" value=""><label for="">Reumatológia</label><br>
                <input type="radio" id="" name="" value=""><label for="">Medicina General</label><br>
            </div>
            <div class="col-6">
                <label for=""><strong>8. Antecedentes patológicos</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Hipertensión arterial</label><br>
                <input type="radio" id="" name="" value=""><label for="">Diabetes</label><br>
                <input type="radio" id="" name="" value=""><label for="">Enfermedad Neumatica Inflamatoria (artritis reumatoide, artritis psoriasica)</label><br>
                <input type="radio" id="" name="" value=""><label for="">Enfermedad Neurológica (parkinsog, accidente cerebro vascular, esclerosis múltiple)</label><br>
            </div>
            <div class="col-6">
                <label for=""><strong>8.1 Responda en caso de haber seleccionado "Enfermedad neurológica en la pregunta anterior</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Parkinsong</label><br>
                <input type="radio" id="" name="" value=""><label for="">Accidente Cerebro Múscular</label><br>
                <input type="radio" id="" name="" value=""><label for="">Esclerosis Múltiple</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>9. Diagnóstico</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis Cervical</label><br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis Lumbar</label><br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis Cervical y Lumbar</label><br>
                <input type="radio" id="" name="" value=""><label for="">Hernía Discal Lumbar</label><br>
                <input type="radio" id="" name="" value=""><label for="">Escoliosis Infantil/Adolescente</label><br>
                <input type="radio" id="" name="" value=""><label for="">Escoliosis del Adulto</label><br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis de Cadera</label><br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis de Rodilla</label><br>
                <input type="radio" id="" name="" value=""><label for="">Artrosis de Columna o Rodilla</label><br>
                <input type="radio" id="" name="" value=""><label for="">Osteoporosis</label><br>
                <input type="radio" id="" name="" value=""><label for="">Fractura vertebral traumatica</label><br>
                <input type="radio" id="" name="" value=""><label for="">Sin diagnostico</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>10. Actualmente esta en tratamiento para la Osteoporosis</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>11. ¿Ha sufrido alguna fractura vertebral osteoporótica?</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>12. Localización de la fractura vertebral osteoporótica</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>13. Intervención quirúrgica de columna cervical por hernia discal o artrosis</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
                <label for=""><strong>14.Intervención quirúrgica de columna lumbar por hernia discal o artrosis</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>

            <div class="col-12">
            <label for=""><strong>15. Intervención quirúrgica de columna por escoliosis del adolescente</strong></label></br>
                <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
            <label for=""><strong>16. Intervención quirúrgica de columna por escoliosis del adulto</strong></label></br>
            <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">          
            <label for=""><strong>17. Portador/a de prótesis de cadera</strong></label></br>
            <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
            <label for=""><strong>18. Portador/a de prótesis de rodilla</strong></label></br>
            <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-12">
            <label for=""><strong>19. Recibe otro tratamiento en la actualidad() fisioterapia, osteopatía, acupuntura, ... </strong></label></br>
            <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-6">
            <label for=""><strong>20. ¿Precisa tomar analgésico y/o antiinflamantorios?</strong></label></br>
            <input type="radio" id="" name="" value=""><label for="">Sí</label><br>
                <input type="radio" id="" name="" value=""><label for="">No</label><br>
            </div>
            <div class="col-6">
            <label for=""><strong>20.1 Número de comprimidos semanales (escriba solo el número)</strong></label></br>
            <input type=" text" id="" name=""><br>
            </div>
            <div class="col-12">
                <input type="submit" value="Guardar Test">
            </div>
        </fieldset>


    </form>
</div>