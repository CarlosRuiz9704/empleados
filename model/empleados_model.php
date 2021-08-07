<?php
class personas_model{
    private $db;
    private $personas;
    private $areas;
    private $roles;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $query="SELECT 
        a.id,
        a.nombre,
        a.email,
        a.sexo,
        a.boletin,
        a.descripcion,
        b.nombre area
        FROM empleados a
        JOIN areas b on b.id=a.area_id";

        $consulta=$this->db->query($query);
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function getArea(){
        $query="SELECT * FROM areas";

        $consulta=$this->db->query($query);
        while($filas=$consulta->fetch_assoc()){
            $this->areas[]=$filas;
        }
        return $this->areas;
    }

    public function getRoles(){
        $query="SELECT * FROM roles";

        $consulta=$this->db->query($query);
        while($filas=$consulta->fetch_assoc()){
            $this->roles[]=$filas;
        }
        return $this->roles;
    }

    public function insertData($nombre,$email,$sexo,$area, $descripcion, $roles){
        $d=1;
        $query=" INSERT INTO empleados 
                (nombre,email,sexo, area_id,boletin,descripcion)
                VALUES ('".$nombre."', '".$email."','".$sexo."',".$area.",".$d.",'".$descripcion."')";
        $this->db->query($query);
        header("Location: ../index.php");
    }
}
?>
