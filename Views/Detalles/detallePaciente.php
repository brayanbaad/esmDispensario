
<?php include_once 'Views/template/header.php'?>
<form id="formularioDetalle"  >
    <div class="card">
        <div class="card-body">
                <a href="<?php echo BASE_URL . 'detalles/'?>" class="btn btn-info mb-4" type="button" data-bs-dismiss="modal" ><i class="material-icons">undo</i>Regresar</a>
            <div class="row">
            <input value="<?= $data['paciente']['id'] ?>" class="form-control" type="hidden" id="id"  name="id" >
                <div class="col-md-4 mb-2">
                    <label for="fechaRuta">Fecha De Ingreso A Ruta:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fechaRuta'] ?>" class="form-control" type="date" id="fechaRuta"  name="fechaRuta" >
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="tipoIdentificacion">Tipo Identificacion:</label>
                    <div class="input-group">
                        <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                        </span>
                        <select name="tipoIdentificacion" id="tipoIdentificacion" class="form-control">
                        <?php
                            $opciones = ["SELECCIONAR","CC","TI"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['tipoIdentificacion']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                        ?>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="identificacion">Numero Identificacion</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                        </span>
                        <input value="<?= $data['paciente']['identificacion'] ?>" class="form-control" type="text" id="identificacion" name="identificacion"  readonly="" >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="apellidos">Apellidos:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['apellidos'] ?>" class="form-control" type="text" id="apellidos" name="apellidos" placeholder=" Digite Apellidos">
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="nombres">Nombres:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['nombres'] ?>" class="form-control" type="text" id="nombres" name="nombres" placeholder="Digite Nombres">
                    </div>
                </div>
                <div class="col-md-8 mb-2">
                    <label for="fechaNacimiento">Fecha De Nacimiento:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fechaNacimiento'] ?>"class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" >
                    </div>
                </div>
                <div class="col-md-4 mb-4" >
                    <label for="edad">Edad</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['edad'] ?>" class="form-control" type="text" id="edad" name="edad" placeholder="Edad" readonly="" >
                    </div>
                </div>                      
                <div class="col-md-4 mb-4">
                    <label for="telefono">Telefono:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['telefono'] ?>" class="form-control" type="number" id="telefono" name="telefono" placeholder="Telefono" >
                    </div>
                </div>
                <div class="col-md-8 mb-4">
                    <label for="direccion">Direccion:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['direccion'] ?>" class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="nivelEducativo">Nivel Educativo:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['nivelEducativo'] ?>" class="form-control" type="text" id="nivelEducativo" name="nivelEducativo" placeholder="Nivel Educativo" >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="ocupacion">Ocupacion:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['ocupacion'] ?>" class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="Ocupacion" >
                    </div>
                </div>
            </div>
        </div>   
    </div>
    
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="fechaMenstruacion">Fecha Ultima Menstruación:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input  value="<?php echo $data['paciente']['fechaMenstruacion'] ? $data['paciente']['fechaMenstruacion'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaMenstruacion"  name="fechaMenstruacion" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaCPN1">Fecha Ingreso CPN1:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input value="<?php echo $data['paciente']['fechaCPN1'] ? $data['paciente']['fechaCPN1'] : date('Y-m-d'); ?>"  class="form-control" type="date" id="fechaCPN1"  name="fechaCPN1" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="sgestacionalIngreso">Semanas De Gestación Al Ingreso Semanas/Dias:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">person</i></span>
                            <input value="<?= $data['paciente']['sgestacionalIngreso'] ?>" class="form-control" type="text" id="sgestacionalIngreso" name="sgestacionalIngreso" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaUControlPre">Fecha Ultimo Control Prenatal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaUControlPre'] ? $data['paciente']['fechaUControlPre'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaUControlPre"  name="fechaUControlPre" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="SemanasAControl">Semanas Actuales Ultimo Control:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input value="<?= $data['paciente']['semanasAControl'] ?>" class="form-control" type="number" id="SemanasAControl" name="SemanasAControl" placeholder="0" readonly="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="clasificacionRiesgo">Clasificacion Riesgo Obstetrico:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                                <i class="material-icons">badge</i>
                            </span>
                        <select name="clasificacionRiesgo" id="clasificacionRiesgo" class="form-control">
                        <?php
                            $opciones = ["SELECCIONAR","ALTO","BAJO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['clasificacionRiesgo']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                        ?>
                            
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="dSGestacional">Diagnostico Sifilis Gestacional Confirmado:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="dSGestacional" id="dSGestacional" class="form-control">
                        <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['dSGestacional']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                        ?>
                            
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="tSGestacional">Tratamiento Sifilis Gestacional:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <select name="tSGestacional" id="tSGestacional" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['tSGestacional']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="tSPareja">Tratamiento Para Sifilis En Pareja:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="tSPareja" id="tSPareja" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['tSPareja']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="CDVIH">Confirmacion Diagnostico infeccion VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                        </span>
                        <select name="CDVIH" id="CDVIH" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['CDVIH']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="IPTVIH">Ingreso Programa Tratamiento VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <select name="IPTVIH" id="IPTVIH" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['IPTVIH']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ALMaterna">Asesoria Lactancia Materna 1 Dia:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">
                                badge
                            </i>
                            </span>
                            <select name="ALMaterna" id="ALMaterna" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","SI","NO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ALMaterna']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="EMicroMulti">Entrega Micronutrientes-Multivitaminicos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                    person
                            </i>
                            </span>
                            <select name="EMicroMulti" id="EMicroMulti" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['EMicroMulti']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaEObstetrico">Fecha Evento Obstetrico(Parto-Aborto):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaEObstetrico'] ? $data['paciente']['fechaEObstetrico'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaEObstetrico"  name="fechaEObstetrico" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="MPFamiliar">Metodo De Planificacion Familiar:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                    person
                            </i>
                            </span>
                            <select name="MPFamiliar" id="MPFamiliar" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['MPFamiliar']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="VitalidadMadre">Vitalidad Madre Final Embarazo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <select name="VitalidadMadre" id="VitalidadMadre" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['VitalidadMadre']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="VitalidadNacido">Vitalidad Recien Nacido:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="VitalidadNacido" id="VitalidadNacido" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['VitalidadNacido']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaPParto">Fecha Probable De Parto(FPP):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaPParto'] ? $data['paciente']['fechaPParto'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaPParto"  name="fechaPParto" >
                        </div>
                    </div>
                </div>   
        </div> 
    </div> 
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="fechaLactancia">Fecha Asesoria Lactancia Materna:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaLactancia'] ? $data['paciente']['fechaLactancia'] : date('Y-m-d'); ?>"  class="form-control" type="date" id="fechaLactancia"  name="fechaLactancia" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="CFactoresRiesgo">Clasificacion De Factores y Criterios De Riesgo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input value="<?= $data['paciente']['CFactoresRiesgo'] ?>" class="form-control" type="text" id="CFactoresRiesgo" name="CFactoresRiesgo" placeholder="DIgite Factores y Riesgos" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="RiesgoBiopsicosocial">Riesgo Biopsicosocial:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="RiesgoBiopsicosocial" id="RiesgoBiopsicosocial" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","4","5","21"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['RiesgoBiopsicosocial']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="NGestacionesActuales">Numero De Gestaciones Actuales:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="NGestacionesActuales" id="NGestacionesActuales" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['NGestacionesActuales']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AntecedentesParto">Antecedentes De Partos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="AntecedentesParto" id="AntecedentesParto" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['AntecedentesParto']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="cesareas">Cesareas:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="cesareas" id="cesareas" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['cesareas']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="Abortos">Abortos</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="Abortos" id="Abortos" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['Abortos']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="HijosVivos">Hijos Vivos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="HijosVivos" id="HijosVivos" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['HijosVivos']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="HijosMuertos">Hijos Muertos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="HijosMuertos" id="HijosMuertos" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['HijosMuertos']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="AntecedentesPatologicos">Antecedentes Patologicos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input value="<?= $data['paciente']['AntecedentesPatologicos'] ?>" class="form-control" type="text" id="AntecedentesPatologicos" name="AntecedentesPatologicos" placeholder="Digite Antecedente" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="Peso">Peso Actual (kg):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input value="<?= $data['paciente']['peso'] ?>" class="form-control" type="number"   id="Peso" name="Peso"  placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="Talla">Talla Actual (M):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input value="<?= $data['paciente']['Talla'] ?>" class="form-control" type="number"  id="Talla" name="Talla"  placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="IMC">IMC:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input  value="<?= $data['paciente']['IMC'] ?>" class="form-control" type="number"  id="IMC" name="IMC" placeholder="0"  readonly="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="CursoPreparacion">Curso Preparacion Maternidad-Paternidad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="CursoPreparacion" id="CursoPreparacion" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","0","1","2","3","4","5","6","7","8","9","10"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['CursoPreparacion']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AtencionGineco">Atencion Por Ginecobstreticia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="AtencionGineco" id="AtencionGineco" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['AtencionGineco']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AtencionOdontologia">Atencion Por Odontologia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="AtencionOdontologia" id="AtencionOdontologia" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['AtencionOdontologia']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="AtencionNutricion">Atencion Por Nutricion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="AtencionNutricion" id="AtencionNutricion" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['AtencionNutricion']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="AtencionPsicologia">Atencion Por Psicologia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="AtencionPsicologia" id="AtencionPsicologia" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['AtencionPsicologia']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="NumeroControles">Numero Controles A Fecha Cohorte:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="NumeroControles" id="NumeroControles" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","1","2","3","4","5","6","7","8","9","10"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['NumeroControles']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="VacunaTetano">Vacuna De Tetano:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="VacunaTetano" id="VacunaTetano" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","AV","1","2","3","4","5"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['VacunaTetano']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="DPTA">DPTA:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="DPTA" id="DPTA" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","NA","UNICA"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['DPTA']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="Influenza">Influenza Por Disponiblidad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="Influenza" id="Influenza" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","DA","DU"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['Influenza']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="VacunaCovid">Vacuna CODIV-19:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="VacunaCovid" id="VacunaCovid" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","SIN VACUNAR","PRIMERA DOSIS","SEGUNDA DOSIS","REFUERZO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['VacunaCovid']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="SuministroAcidoAcetil">Suministro Acido Acetilsalicilico-ASA:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="SuministroAcidoAcetil" id="SuministroAcidoAcetil" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","NO APLICA","SI SUMINISTRA","NO EVALUADO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['SuministroAcidoAcetil']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="CRiesgoPreeclampsia">Clasificacion Del Riesgo Preeclampsia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <select name="CRiesgoPreeclampsia" id="CRiesgoPreeclampsia" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","RIESGO NO EVALUADO","RIESGO BAJO","RIESGO ALTO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['CRiesgoPreeclampsia']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                </div>   
        </div> 
    </div> 
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="fechaTomaSifilis">Fecha Toma De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTomaSifilis'] ? $data['paciente']['fechaTomaSifilis'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaSifilis"  name="fechaTomaSifilis" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoSifilis">Resultados De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoSifilis" id="ResultadoSifilis" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","REACTIVO","NO REACTIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoSifilis']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaVIH">Fecha Toma De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTomaVIH'] ? $data['paciente']['fechaTomaVIH'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaVIH"   name="fechaTomaVIH" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoVIH">Resultados De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoVIH" id="ResultadoVIH" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","POSITIVO","NEGATIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoVIH']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaHB">Fecha Toma De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTomaHB'] ? $data['paciente']['fechaTomaHB'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaHB"  name="fechaTomaHB" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoHB">Resultados De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoHB" id="ResultadoHB" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","POSITIVO","NEGATIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoHB']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaGlicemia">Fecha Toma De Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTomaGlicemia'] ? $data['paciente']['fechaTomaGlicemia'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaGlicemia"  name="fechaTomaGlicemia" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoGlicemia">Resultado Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input   value="<?php echo $data['paciente']['ResultadoGlicemia']?>" class="form-control" type="number" id="ResultadoGlicemia" name="ResultadoGlicemia" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab1Trimestre">Toma De laboratorios 1 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab1Trimestre" id="TomaLab1Trimestre" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","COMPLETOS","INCOMPLETOS","SIN TOMARLOS"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['TomaLab1Trimestre']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab2Trimestre">Toma De laboratorios 2 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab2Trimestre" id="TomaLab2Trimestre" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","COMPLETOS","INCOMPLETOS","SIN TOMARLOS"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['TomaLab2Trimestre']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab3Trimestre">Toma De laboratorios 3 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab3Trimestre" id="TomaLab3Trimestre" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","COMPLETOS","INCOMPLETOS","SIN TOMARLOS"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['TomaLab3Trimestre']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="SolicitaIVE">Solicita Ive:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="SolicitaIVE" id="SolicitaIVE" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","SI","NO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['SolicitaIVE']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="TamizajeChagas">Tamizaje Chagas:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TamizajeChagas" id="TamizajeChagas" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","SI","NO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['TamizajeChagas']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                </div>   
        </div> 
    </div>
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="fechaAfiliacionSSFM">Fecha Afiliacion Al SSFM</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaAfiliacionSSFM'] ? $data['paciente']['fechaAfiliacionSSFM'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaAfiliacionSSFM"  name="fechaAfiliacionSSFM" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje1">Fecha Realizacion Tamizaje VIH 1 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTamizaje1'] ? $data['paciente']['fechaTamizaje1'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje1"  name="fechaTamizaje1" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje1">Resultado Tamizaje VIH 1 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje1" id="ResultadoTamizaje1" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","REACTIVO","NO REACTIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoTamizaje1']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje2">Fecha Realizacion Tamizaje VIH 2 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTamizaje2'] ? $data['paciente']['fechaTamizaje2'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje2"  name="fechaTamizaje2" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje2">Resultado Tamizaje VIH 2 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje2" id="ResultadoTamizaje2" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","REACTIVO","NO REACTIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoTamizaje2']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje3">Fecha Realizacion Tamizaje VIH 3 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTamizaje3'] ? $data['paciente']['fechaTamizaje3'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje3"  name="fechaTamizaje3" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje3">Resultado Tamizaje VIH 3 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje3" id="ResultadoTamizaje3" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","REACTIVO","NO REACTIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoTamizaje3']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje4">Fecha Realizacion Tamizaje VIH 4 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo $data['paciente']['fechaTamizaje4'] ? $data['paciente']['fechaTamizaje4'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje4"  name="fechaTamizaje4" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje4">Resultado Tamizaje VIH 4 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje4" id="ResultadoTamizaje4" class="form-control">
                            <?php
                            $opciones = ["SELECCIONAR","REACTIVO","NO REACTIVO"];
                            foreach ($opciones as $opcion) { 
                                $selected = ($opcion == $data['paciente']['ResultadoTamizaje4']) ? 'selected' : ''; 
                                echo "<option value='$opcion' $selected>$opcion</option>"; 
                            } 
                            ?> 
                            </select>
                        </div>
                    </div>  
                <div class="col-md-12 mb-2">
                    <label for="observaciones">Observaciones:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">
                                    article
                                </i>
                            </span>
                        <textarea value="<?php echo $data['paciente']['OBSERVACIONES']  ?>" class="form-control" type="text" id="observaciones" name="observaciones" rows="6" placeholder=""></textarea>
                    </div>
                </div> 
        </div> 
    </div>
    <div class="modal-footer">
        <a href="" class="btn btn-info" onclick="ModificarPaciente(event)"><i class="material-icons"> save</i>Guardar</a>
        <a href="<?php echo BASE_URL . 'detalles/'?>" class="btn btn-danger" type="button" data-bs-dismiss="modal" ><i class="material-icons">undo</i>Regresar</a>
    </div>
</form> 

<?php include_once 'Views/template/footer.php'?>