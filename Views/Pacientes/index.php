<?php include_once 'Views/template/header.php'?>
<form id="formulario" autocomplete="off">
    <div class="card">
        <div class="card-body">
        <input type="hidden" id="id_paciente" name="id_paciente">
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
                        <input  class="form-control" type="number" id="edad" name="edad" placeholder="Edad" readonly="" >
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
                        <input  class="form-control" type="number" id="telefono" name="telefono" placeholder="Telefono" >
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
                    <div class="col-md-6 mb-4">
                        <label for="fechaMenstruacion">Fecha Ultima Menstruación:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input value="<?php echo date('Y-m-d'); ?>"  class="form-control" type="date" id="fechaMenstruacion"  name="fechaMenstruacion" >
                        </div>
                    </div>
                <div class="col-md-6 mb-2">
                        <label for="fechaCPN1">Fecha Ingreso CPN1:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">today</i></span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaCPN1"  name="fechaCPN1" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="sgestacionalIngreso">Semanas De Gestación Al Ingreso Semanas/Dias:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="material-icons">person</i></span>
                            <input  class="form-control" type="number" id="sgestacionalIngreso" name="sgestacionalIngreso" placeholder="0" readonly="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaUControlPre">Fecha Ultimo Control Prenatal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaUControlPre"  name="fechaUControlPre" >
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="SemanasAControl">Semanas Actuales Ultimo Control:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input  class="form-control" type="number" id="SemanasAControl" name="SemanasAControl" placeholder="0" readonly="">
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
                                <option value="ALTO">ALTO</option>
                                <option value="BAJO">BAJO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="DSGestacional">Diagnostico Sifilis Gestacional Confirmado:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="DSGestacional" id="DSGestacional" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="TSGestacional">Tratamiento Sifilis Gestacional:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <select name="TSGestacional" id="TSGestacional" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
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
                            <select name="TSPareja" id="TSPareja" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
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
                        <select name="CDVIH" id="CDVIH" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="IPTVIH">Ingreso Programa Tratamiento VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                            <select name="IPTVIH" id="IPTVIH" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
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
                            <select name="ALMaterna" id="ALMaterna" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
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
                            <select name="EMicroMulti" id="EMicroMulti" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaEObstetrico">Fecha Evento Obstetrico(Parto-Aborto):</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>"class="form-control" type="date" id="fechaEObstetrico"  name="fechaEObstetrico" >
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
                            <select name="MPFamiliar" id="MPFamiliar" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="VitalidadMadre">Vitalidad Madre Final Embarazo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <select name="VitalidadMadre" id="VitalidadMadre" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
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
                            <select name="VitalidadNacido" id="VitalidadNacido" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
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
                    <div class="col-md-6 mb-4">
                        <label for="fechaLactancia">Fecha Asesoria Lactancia Materna:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input class="form-control" type="date" id="fechaLactancia" value="<?php echo date('Y-m-d'); ?>" name="fechaLactancia" >
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
                            <input  class="form-control" type="text" id="CFactoresRiesgo" name="CFactoresRiesgo" placeholder="Edad Materna" >
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
                            <select name="RiesgoBiopsicosocial" id="RiesgoBiopsicosocial" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="21">21</option>
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
                            <select name="NGestacionesActuales" id="NGestacionesActuales" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <select name="AntecedentesParto" id="AntecedentesParto" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <select name="cesareas" id="cesareas" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <select name="Abortos" id="Abortos" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <select name="HijosVivos" id="HijosVivos" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <select name="HijosMuertos" id="HijosMuertos" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
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
                            <input class="form-control" type="text" id="AntecedentesPatologicos" name="AntecedentesPatologicos" placeholder="Digite Antecedente" >
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
                            <input class="form-control" type="number"   id="Peso" name="Peso"  placeholder="0" >
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
                            <input  class="form-control" type="number"  id="Talla" name="Talla"  placeholder="0" >
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
                            <input  class="form-control" type="number"  id="IMC" name="IMC" placeholder="0"  readonly="">
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
                            <select name="CursoPreparacion" id="CursoPreparacion" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
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
                            <select name="AtencionGineco" id="AtencionGineco" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
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
                            <select name="AtencionOdontologia" id="AtencionOdontologia" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
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
                            <select name="AtencionNutricion" id="AtencionNutricion" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
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
                            <select name="AtencionPsicologia" id="AtencionPsicologia" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
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
                            <select name="NumeroControles" id="NumeroControles" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
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
                            <select name="VacunaTetano" id="VacunaTetano" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="AV">AV</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
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
                            <select name="DPTA" id="DPTA" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="NA">NA</option>
                                <option value="UNICA">UNICA</option>
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
                            <select name="Influenza" id="Influenza" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="DA">DA</option>
                                <option value="DU">DU</option>
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
                            <select name="VacunaCovid" id="VacunaCovid" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="SIN VACUNAR">SIN VACUNAR</option>
                                <option value="PRIMERA DOSIS">PRIMERA DOSIS</option>
                                <option value="SEGUNDA DOSIS">SEGUNDA DOSIS</option>
                                <option value="REFUERZO">REFUERZO</option>
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
                            <select name="SuministroAcidoAcetil" id="SuministroAcidoAcetil" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="NO APLICA">NO APLICA</option>
                                <option value="SI SUMINISTRA">SI SE SUMINISTRA</option>
                                <option value="NO EVALUADO">REGISTRO NO EVALUADO</option>
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
                            <select name="CRiesgoPreeclampsia" id="CRiesgoPreeclampsia" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="RIESGO NO EVALUADO">RIESGO NO EVALUADO</option>
                                <option value="RIESGO BAJO">RIESGO BAJO</option>
                                <option value="RIESGO ALTO">RIESGO ALTO</option>
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
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaSifilis"  name="fechaTomaSifilis" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoSifilis">Resultados De Sifilis:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoSifilis" id="ResultadoSifilis" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO">REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaVIH">Fecha Toma De VIH:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaVIH"   name="fechaTomaVIH" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
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
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaHB">Fecha Toma De HB:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaHB"  name="fechaTomaHB" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
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
                    <div class="col-md-6 mb-2">
                        <label for="fechaTomaGlicemia">Fecha Toma De Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="material-icons">today</i>
                            </span>
                            <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaTomaGlicemia"  name="fechaTomaGlicemia" >
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoGlicemia">Resultado Glicemia Basal:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                            <input  class="form-control" type="number" id="ResultadoGlicemia" name="ResultadoGlicemia" placeholder="0" >
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
                                <option value="SIN TOMARLOS">SIN TOMARLOS</option>
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
                                <option value="SIN TOMARLOS">SIN TOMARLOS</option>
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
                                <option value="SIN TOMARLOS">SIN TOMARLOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
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
                    <div class="col-md-6 mb-4">
                        <label for="TamizajeChagas">Tamizaje Chagas:</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="TamizajeChagas" id="TamizajeChagas" class="form-control" >
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
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje1">Resultado Tamizaje VIH 1 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje1" id="ResultadoTamizaje1" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
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
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje2">Resultado Tamizaje VIH 2 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje2" id="ResultadoTamizaje2" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
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
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje3">Resultado Tamizaje VIH 3 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje3" id="ResultadoTamizaje3" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
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
                    <div class="col-md-6 mb-4">
                        <label for="ResultadoTamizaje4">Resultado Tamizaje VIH 4 Trimestre De Gestacion::</label>
                        <div class="input-group">
                            <span class="input-group-text" >
                            <i class="material-icons">badge</i>
                            </span>
                            <select name="ResultadoTamizaje4" id="ResultadoTamizaje4" class="form-control" >
                                <option value="SELECCIONAR">SELECCIONAR</option>
                                <option value="REACTIVO"> REACTIVO</option>
                                <option value="NO REACTIVO">NO REACTIVO</option>
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
                        <textarea class="form-control" type="text" id="observaciones" name="observaciones" rows="6" placeholder=""></textarea>
                    </div>
                </div> 
        </div> 
    </div>
    <div class="modal-footer">
        <button  class="btn btn-info" type="submit"><i class="material-icons"> save</i>Guardar</button>
        <a href="<?php echo BASE_URL . 'dashboard/'?>" class="btn btn-danger" type="button" data-bs-dismiss="modal" ><i class="material-icons">cancel</i>Cancelar</a>
    </div>
</form> 
<?php include_once 'Views/template/footer.php'?>