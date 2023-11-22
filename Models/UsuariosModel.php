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
        $sql ="SELECT u.*, pd.id,pd.apellidos as apellidos FROM usuarios u  INNER JOIN personal_dispensario pd WHERE  pd.id=u.id; ";
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
        $sql ="SELECT id,id_persona,usuario,rol,estado FROM usuarios  WHERE id='$id'  AND estado=1";
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

    
    public function RegistrarUsuario($usuario,$persona,$rol,$hash){
        $sql = "INSERT INTO usuarios (usuario,id_persona,rol,clave) VALUES (?,?,?,?)";
        $datos= array($usuario,$persona,$rol,$hash);
        return $this->insertar($sql,$datos);
    }

    public function ModificarUsuario($usuario,$persona,$rol,$id_usuario){
        $sql = "UPDATE usuarios SET usuario =?,id_persona=?,rol=? WHERE id=?";
        $datos= array($usuario,$persona,$rol,$id_usuario);
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

    public function registrarPermisos(int $id_user, int $id_permiso) {
        $sql = "INSERT INTO detalle_permisos (id_usuario,id_permiso) VALUES(?,?)";
        $datos= array($id_user,$id_permiso);
        return $this->save($sql,$datos);
    }

    public function eliminarPermisos(int $id_user) {
        $sql = "DELETE FROM detalle_permisos WHERE id_usuario=?";
        $datos= array($id_user);
        return $this->save($sql,$datos);
    }

    public function getDetallePermisos($id_user){
        $sql ="SELECT * FROM detalle_permisos  WHERE id_usuario=$id_user";
        $data =$this->selectAll($sql);
        return $data;
    }

    public function verificarPermiso(int $id_user,string $nombre){
        $sql = "SELECT p.id, p.permiso, d.id, d.id_usuario, d.id_permiso FROM permisos p INNER JOIN detalle_permisos d ON p.id= d.id_permiso WHERE d.id_usuario = $id_user  AND p.permiso = '$nombre'";
        $data = $this->selectAll($sql);
        return $data;
    }


    public function getPass($clave,$id){
        $sql ="SELECT * FROM usuarios  WHERE clave = '$clave' AND id='$id'";
        $data =$this->select($sql);
        return $data;
    }


    
    public function modificarPass($clave,$id){
        $sql ="UPDATE usuarios SET clave=? WHERE id=?";
        $datos= array($clave,$id);
        $data =$this->save($sql,$datos);
        return $data;
    }
    
    

    

    
}
?>