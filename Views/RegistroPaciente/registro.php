<?php include_once 'Views/template/header.php'?>
<form id="formulario">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="fechaRuta">Fecha De Ingreso A Ruta: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input value="<?php echo date('Y-m-d'); ?>"  class="form-control" type="date" id="fechaRuta"  name="fechaRuta" >
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="tipoIdentificacion">Tipo Identificacion: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                        </span>
                        <select name="tipoIdentificacion" id="tipoIdentificacion" class="form-control">
                            <option value="SELECCIONAR">SELECCIONAR</option>
                            <option value="CC">CC</option>
                            <option value="TI">TI</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="identificacion">Numero Identificacion: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                        </span>
                        <input  class="form-control" type="number" id="identificacion" name="identificacion" placeholder="Digite Numero"  >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="apellidos">Apellidos: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="text" id="apellidos" name="apellidos" placeholder=" Digite Apellidos">
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="nombres">Nombres: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="text" id="nombres" name="nombres" placeholder="Digite Nombres">
                    </div>
                </div>
                <div class="col-md-8 mb-2">
                    <label for="fechaNacimiento">Fecha De Nacimiento: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">today</i>
                        </span>
                        <input  value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" >
                    </div>
                </div>
                <div class="col-md-4 mb-4" >
                    <label for="edad">Edad: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="text" id="edad" name="edad" placeholder="Edad" disabled >
                    </div>
                </div>                      
                <div class="col-md-4 mb-4">
                    <label for="telefono">Telefono: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="tel" id="telefono" name="telefono" placeholder="Telefono" >
                    </div>
                </div>
                <div class="col-md-8 mb-4">
                    <label for="direccion">Direccion: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="nivelEducativo">Nivel Educativo: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="text" id="nivelEducativo" name="nivelEducativo" placeholder="Nivel Educativo" >
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="ocupacion">Ocupacion: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">
                            person
                        </i>
                        </span>
                        <input  class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="ocupacion" >
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
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input value="<?php echo date('Y-m-d'); ?>"  class="form-control" type="date" id="fechaMestruacion"  name="fechaMestruacion" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="sgestacionalIngreso">Semanas Gestación Al Ingreso:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">person</i></span>
                            <input  class="form-control" type="number" id="sgestacionalIngreso" name="sgestacionalIngreso" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fechaCPN1">Fecha Ingreso CPN1:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaCPN1"  name="fechaCPN1" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fechaUControlPre">Fecha Ultimo Control Prenatal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaUControlPre"  name="fechaUControlPre" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="SemanasUControl">Semanas Actuales Ultimo Control:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="SemanasUControl" name="SemanasUControl" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ClasificacionRiesgo">Clasificacion Riesgo Obstetrico:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ClasificacionRiesgo" id="ClasificacionRiesgo" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="CC">ALTO</option>
                                <option value="TI">BAJO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="DSGestacional">Diagnostico Sifilis Gestacional Confirmado:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="DSGestacional" name="DSGestacional" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="TSGestacional">Tratamiento Sifilis Gestacional:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="TSGestacional" name="TSGestacional" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TSPareja">Tratamiento Para Sifilis En Pareja:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="TSPareja" name="TSPareja" placeholder="0" >
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
                        <input class="form-control" type="number" id="CDVIH" name="CDVIH" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="IPTVIH">Ingreso Programa Tratamiento VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="IPTVIH" name="IPTVIH" placeholder="0" >
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
                            <select name="ALMaterna" id="ALMaterna" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="CC">SI</option>
                                <option value="TI">NO</option>
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
                            <input class="form-control" type="number" id="EMicroMulti" name="EMicroMulti" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="VitalidadMadre">Vitalidad Madre Final Embarazo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="VitalidadMadre" name="VitalidadMadre" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="VitalidadNacido">Vitalidad Recien Nacido:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="VitalidadNacido" name="VitalidadNacido" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="fechaPParto">Fecha Probable De Parto(FPP):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>"class="form-control" type="date" id="fechaPParto"  name="fechaPParto" >
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
                            <input class="form-control" type="date" id="fechaLactancia" value="<?php echo date('Y-m-d'); ?>" name="fechaLactancia" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="CFactoresRiesgo">Clasificacion De Factores y Criterios De Riesgo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="CFactoresRiesgo" name="CFactoresRiesgo" placeholder="Edad Materna" >
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
                            <input class="form-control" type="number" id="RiesgoBiopsicosocial" name="RiesgoBiopsicosocial" placeholder="0" >
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
                            <input class="form-control" type="number" id="NGestacionesActuales" name="NGestacionesActuales" placeholder="0" >
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
                            <input class="form-control" type="number" id="cesareas" name="cesareas" placeholder="0" >
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
                            <input class="form-control" type="number" id="Abortos" name="Abortos" placeholder="0" >
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
                            <input class="form-control" type="number" id="HijosVivos" name="HijosVivos" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="HijosMuertos">Hijos Muertos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="HijosMuertos" name="HijosMuertos" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AntecedentesPatologicos">Antecedentes Patologicos:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="AntecedentesPatologicos" name="AntecedentesPatologicos" placeholder="0" >
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
                            <input class="form-control" type="number"   id="Peso" name="Peso" placeholder="0" >
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
                            <input class="form-control" type="number"  id="Talla" name="Talla" placeholder="0" >
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
                            <input class="form-control" type="number"  id="IMC" name="IMC" placeholder="0" readonly="">
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
                            <input class="form-control" type="number" id="CursoPreparacion" name="CursoPreparacion" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AtencionGinecob">Atencion Por Ginecobstreticia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="AtencionGinecob" name="AtencionGinecob" placeholder="0" >
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
                            <input class="form-control" type="text" id="AtencionOdontologia" name="AtencionOdontologia" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="AtencionNutricion">Atencion Por Nutricion:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="text" id="AtencionNutricion" name="AtencionNutricion" placeholder="0" >
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
                            <input class="form-control" type="number" id="NumeroControles" name="NumeroControles" placeholder="0" >
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
                            <input class="form-control" type="text" id="VacunaTetano" name="VacunaTetano" placeholder="0" >
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
                            <input class="form-control" type="text" id="DPTA" name="DPTA" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="Influenza">Influenza Por Disponiblidad:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="Influenza" name="Influenza" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="SuministroAcidoAcetil">Suministro Acido Acetilsalicilico-ASA:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="SuministroAcidoAcetil" name="SuministroAcidoAcetil" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="CRiesgoPreeclampsia">Clasificacion Del Riesgo Preeclampsia:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">
                                person
                            </i>
                            </span>
                            <input class="form-control" type="number" id="CRiesgoPreeclampsia" name="CRiesgoPreeclampsia" placeholder="0" >
                        </div>
                    </div>
                </div>   
        </div> 
    </div> 
    <div class="card">
        <div class="card-body"> 
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="fechaTomaSifilis">Fecha Toma De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaSifilis"  name="fechaTomaSifilis" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoSifilis">Resultados De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoSifilis" id="ResultadoSifilis" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO">REACTIVO</option>
                                <option value="NOREACTIVO">NO REACTIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fechaTomaVIH">Fecha Toma De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaVIH"   name="fechaTomaVIH" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoVIH">Resultados De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoVIH" id="ResultadoVIH" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="POSITIVO">POSITIVO</option>
                                <option value="NEGATIVO">NEGATIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fechaTomaHB">Fecha Toma De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaHB"  name="fechaTomaHB" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoHB">Resultados De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoHB" id="ResultadoHB" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="POSITIVO">POSITIVO</option>
                                <option value="NEGATIVO">NEGATIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="fechaTomaGlicemia">Fecha Toma De Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaGlicemia"  name="fechaTomaGlicemia" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoGlicemia">Resultado Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input class="form-control" type="number" id="ResultadoGlicemia" name="ResultadoGlicemia" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab1Trimestre">Toma De laboratorios 1 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab1Trimestre" id="TomaLab1Trimestre" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                                <option value="SINTOMARLOS">SIN TOMARLOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab2Trimestre">Toma De laboratorios 2 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab2Trimestre" id="TomaLab2Trimestre" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                                <option value="SINTOMARLOS">SIN TOMARLOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TomaLab3Trimestre">Toma De laboratorios 3 Trimestre:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TomaLab3Trimestre" id="TomaLab3Trimestre" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="COMPLETOS">COMPLETOS</option>
                                <option value="INCOMPLETOS">INCOMPLETOS</option>
                                <option value="SINTOMARLOS">SIN TOMARLOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="SolicitaIVE">Solicita Ive:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="SolicitaIVE" id="SolicitaIVE" class="form-control" >
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
                        <label for="fechaAfiliacionSSFM">Fecha Afiliacion Al SSFM</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaAfiliacionSSFM"  name="fechaAfiliacionSSFM" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje1">Fecha Realizacion Tamizaje VIH 1 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje1"  name="fechaTamizaje1" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoTamizaje1">Resultado Tamizaje VIH 1 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje1" id="ResultadoTamizaje1" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value=" REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje2">Fecha Realizacion Tamizaje VIH 2 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fechaTamizaje2" value="<?php echo date('Y-m-d'); ?>" name="fechaTamizaje2" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoTamizaje2">Resultado Tamizaje VIH 2 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje2" id="ResultadoTamizaje2" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value=" REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje3">Fecha Realizacion Tamizaje VIH 3 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTamizaje3"  name="fechaTamizaje3" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoTamizaje3">Resultado Tamizaje VIH 3 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje3" id="ResultadoTamizaje3" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value=" REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fechaTamizaje4">Fecha Realizacion Tamizaje VIH 4 Trimestre  De Gestacion</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fechaTamizaje4" value="<?php echo date('Y-m-d'); ?>" name="fechaTamizaje4" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="ResultadoTamizaje4">Resultado Tamizaje VIH 4 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje4" id="ResultadoTamizaje4" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value=" REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                            </select>
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
        <button  class="btn btn-info" type="submit"><i class="material-icons"> save</i>Guardar</button>
        <a href="<?php echo BASE_URL . 'pacientes/'?>" class="btn btn-danger" type="button" data-bs-dismiss="modal" ><i class="material-icons">cancel</i>Cancelar</a>
    </div>
</form> 
<?php include_once 'Views/template/footer.php'?>