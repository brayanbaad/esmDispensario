
<?php include_once 'Views/template/header.php'?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="fecha">Fecha De Ingreso A Ruta:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fecha_ingreso'] ?>" class="form-control" type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>" name="fecha" >
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="rol">Tipo Identificacion:</label>
                    <div class="input-group">
                        <span class="input-group-text" >
                        <i class="material-icons">
                            badge
                        </i>
                        </span>
                        <select name="rol" id="rol" class="form-control">
                            <option value="SELECCIONAR">SELECCIONAR</option>
                            <option value="CC">CC</option>
                            <option value="TI">TI</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="usuario">Numero Identificacion</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                        </span>
                        <input value="<?= $data['paciente']['identificacion'] ?>" class="form-control" type="text" id="usuario" name="usuario" placeholder="Digite Numero" disabled >
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
                        <input value="<?= $data['paciente']['nombres'] ?>" class="form-control" type="text" id="usuario" name="usuario" placeholder="Digite Nombres">
                    </div>
                </div>
                <div class="col-md-8 mb-2">
                    <label for="fecha">Fecha De Nacimiento:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?= $data['paciente']['fecha_nacimiento'] ?>"class="form-control" type="date" id="fecha" name="fecha" >
                    </div>
                </div>
                <div class="col-md-4 mb-4" >
                    <label for="nombres">Edad</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['edad'] ?>" class="form-control" type="text" id="usuario" name="usuario" placeholder="Edad" disabled >
                    </div>
                </div>                      
                <div class="col-md-4 mb-4">
                    <label for="nombres">Telefono:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input value="<?= $data['paciente']['telefono'] ?>" class="form-control" type="number" id="usuario" name="usuario" placeholder="Nombres" >
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
                        <input value="<?= $data['paciente']['direccion'] ?>" class="form-control" type="text" id="direccion" name="direccion" placeholder="Nombres" >
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
                        <input value="<?= $data['paciente']['nivelEducativo'] ?>" class="form-control" type="text" id="usuario" name="usuario" placeholder="Nombres" >
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
                        <input value="<?= $data['paciente']['ocupacion'] ?>" class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="Nombres" >
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="fecha">Fecha Ultima Menstruación:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nombres">Semanas Gestación Al Ingreso:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Ingreso CPN1:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" name="fecha" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fecha">Fecha Ultimo Control Prenatal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fecha" name="fecha" >
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
                            input class="form-control" type="number" id="usuario" name="usuario" placeholder="0" >
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
                            <input class="form-control" type="date" id="fecha" name="fecha" >
                        </div>
                    </div>
                </div>   
            </div> 
        </div> 
    
    
<?php include_once 'Views/template/footer.php'?>