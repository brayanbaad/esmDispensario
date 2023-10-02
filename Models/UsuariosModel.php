<?php
class UsuariosModel extends Query{
    public function __construct(){
        parent::__construct();
    }

    public function getUsuario( $usuario, $clave){
            $sql ="SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave' AND estado = 1   ";
            $data =$this->select($sql);
            return $data;
    }
    public function getUsuarios(){
        $sql ="SELECT u.*,p.id,p.nombre as programa, pd.id,pd.apellidos as apellidos FROM usuarios u INNER JOIN programas p INNER JOIN personal_dispensario pd WHERE u.id_programa = p.id and pd.id=u.id; ";
        $data =$this->selectAll($sql);
        return $data;
    }
    public function getProgramas(){
        $sql ="SELECT * FROM programas  WHERE estado=1";
        $data =$this->selectAll($sql);
        return $data;
    }
    public function getPermisos(){
        $sql ="SELECT * FROM permisos";
        $data =$this->selectAll($sql);
        return $data;
    }
    public function getPersonas(){
        $sql ="SELECT * FROM personal_dispensario  WHERE estado=1";
        $data =$this->selectAll($sql);
        return $data;
    }

    public function getEditar($id){
        $sql ="SELECT id,id_persona,usuario,id_programa,estado FROM usuarios  WHERE id='$id'  AND estado=1";
        $data =$this->select($sql);
        return $data;
    }
    
    public function getVerificar($item,$usuario,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM usuarios WHERE $item = '$usuario' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM usuarios WHERE $item = '$usuario'";
        }
        return $this->select($sql);
    }

    
    public function RegistrarUsuario($usuario,$persona,$hash,$programa){
        $sql = "INSERT INTO usuarios (usuario,id_persona,clave,id_programa) VALUES (?,?,?,?)";
        $datos= array($usuario,$persona,$hash,$programa);
        return $this->insertar($sql,$datos);
    }

    public function ModificarUsuario($usuario,$persona,$programa,$id_usuario){
        $sql = "UPDATE usuarios SET usuario =?,id_persona =?,id_programa=? WHERE id=?";
        $datos= array($usuario,$persona,$programa,$id_usuario);
        return $this->save($sql,$datos);
    }
    public function eliminar($id) {
        $sql = "UPDATE usuarios SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function accionUsuario( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE usuarios SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
    

    

    
}
?>