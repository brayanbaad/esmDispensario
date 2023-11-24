<?php include_once 'Views/template/header.php'?>
<form id="formulario">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="fecha">Fecha De Ingreso A Ruta:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fecha_ingreso'] ?>" class="form-control" type="date" id="fecha"  name="fecha" >
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
                                $selected = ($opcion == $data['paciente']['tipo_identificacion']) ? 'selected' : ''; 
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
                        <input value="<?= $data['paciente']['identificacion'] ?>" class="form-control" type="text" id="identificacion" name="identificacion" placeholder="Digite Numero" disabled >
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
                        <input value="<?= $data['paciente']['apellidos'] ?>" class="form-control" type="text" id="usuario" name="usuario" placeholder=" Digite Apellidos">
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
                    <label for="fecha_nacimiento">Fecha De Nacimiento:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fecha_nacimiento'] ?>"class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento" >
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
                        <input value="<?= $data['paciente']['edad'] ?>" class="form-control" type="text" id="edad" name="edad" placeholder="Edad" disabled >
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
                    <label for="niveleducativo">Nivel Educativo:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['nivelEducativo'] ?>" class="form-control" type="text" id="niveleducativo" name="niveleducativo" placeholder="Nivel Educativo" >
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
                        <input value="<?= $data['paciente']['ocupacion'] ?>" class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="ocupacion" >
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="fechaMestruacion">Fecha Ultima Menstruación:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input  value="<?php echo $data['paciente']['fecha_umenstruacion'] ? $data['paciente']['fecha_umenstruacion'] : date('Y-m-d'); ?>" class="form-control" type="date" id="fechaMestruacion"  name="fechaMestruacion" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="sgestacionalIngreso">Semanas Gestación Al Ingreso:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input value="<?= $data['paciente']['sgestacional_ingreso'] ?>" class="form-control" type="number" id="sgestacionalIngreso" name="sgestacionalIngreso" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Ingreso CPN1:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha"  value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Ultimo Control Prenatal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Semanas Actuales Ultimo Control:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rol">Clasificacion Riesgo Obstetrico:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="CC">ALTO</option>
                                <option value="TI">BAJO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Diagnostico Sifilis Gestacional Confirmado:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Tratamiento Sifilis Gestacional:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Tratamiento Para Sifilis En Pareja:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Confirmacion Diagnostico infeccion VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                        </span>
                        <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Ingreso Programa Tratamiento VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="rol">Asesoria Lactancia Materna 1 Dia:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">
                                badge
                            </i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="CC">SI</option>
                                <option value="TI">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Entrega Micronutrientes-Multivitaminicos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                    person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Vitalidad Madre Final Embarazo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Vitalidad Recien Nacido:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="fecha">Fecha Probable De Parto(FPP):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                </div>   
        </div> 
    </div> 
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="fechaLactancia">Fecha Asesoria Lactancia Materna:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Clasificacion De Factores y Riesgo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Riesgo Biopsicosocial:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Numero De Gestaciones Actuales:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Antecedentes De Partos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Partos</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Abortos</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Hijos Vivos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Hijos Muertos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Antecedentes Patologicos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Peso Actual (kg):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Talla Actual (M):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">IMC:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Curso Preparacion Maternidad-Paternidad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Atencion Por Ginecobstreticia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Atencion Por Odontologia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Atencion Por Nutricion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Numero Controles A Fecha Cohorte:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Vacuna De Tetano:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">DPTA:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Influenza Por Disponiblidad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Suministro Acido Acetilsalicilico-ASA:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">ClasificacionDel Riesgo Preeclampsia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>

                </div>   
        </div> 
    </div> 
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="fecha">Fecha Toma De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Resultado De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Toma De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha"  value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Resultado De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Toma De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Resultado HB:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Toma De Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Resultado Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rol">Toma De laboratorios 1 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rol">Toma De laboratorios 2 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rol">Toma De laboratorios 3 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rol">Solicita Ive:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="rol" id="rol" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
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
                        <label for="fecha">Fecha Afiliacion Al SSFM</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fecha">Fecha Realizacion Tamizaje VIH 1 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Resultado Tamizaje VIH 1 Trimestre De Gestacion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fecha">Fecha Realizacion Tamizaje VIH 2 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Resultado Tamizaje VIH 2 Trimestre De Gestacion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fecha">Fecha Realizacion Tamizaje VIH 3 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Resultado Tamizaje VIH 3 Trimestre De Gestacion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fecha">Fecha Realizacion Tamizaje VIH 4 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nombres">Resultado Tamizaje VIH 4 Trimestre De Gestacion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                </div>  
                <div class="col-md-12 mb-2">
                    <label for="novedad">Novedad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">
                                    article
                                </i>
                            </span>
                        <textarea class="form-control" type="text" id="novedad" name="novedad" rows="6" placeholder=""></textarea>
                    </div>
                </div> 
        </div> 
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-info" onclick="detallesCompletos(<?= $data['paciente']['identificacion']?>)"><i class="material-icons"> save</i>Guardar</a>
        <a href="<?php echo BASE_URL . 'pacientes/'?>" class="btn btn-danger" type="button" data-bs-dismiss="modal" ><i class="material-icons">cancel</i>Cancelar</a>
    </div>
</form> 

<?php include_once 'Views/template/footer.php'?>