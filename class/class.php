<?php

class Trabajo
{
    private $dbh;
    private $precios;
    private $clientes;
    private $presupuesto;
    private $detalle_presupuesto;
    
    public function __construct()
    {
        $this->dbh=new PDO('mysql:host=localhost;dbname=cotizador', "root", "");
        $this->precios=array();
        $this->clientes=array();
        $this->presupuesto=array();
        $this->detalle_presupuesto=array();
    
    }
    private function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");    
    }
    public function get_precios()
    {
        self::set_names();
        $sql="select * from precios";
        
            
       	foreach ($this->dbh->query($sql) as $row)
		{
			$this->precios[]=$row;
		}
			return $this->precios;
			$this->dbh=null;
    }

    public function get_presupuesto()
    {
        self::set_names();
        $sql="select * from presupuesto";

        foreach($this->dbh->query($sql) as $row)
        {
            $this->presupuesto[]=$row;
        }
            return $this->presupuesto;
            $this->dbh=null;
    }


    public function get_clientes()
    {
        self::set_names();
        $sql="select * from clientes";

        foreach($this->dbh->query($sql) as $row)
        {
            $this->clientes[]=$row;
        }
        return $this->clientes;
        $this->dbh=null;
    }


    public function add_material()
    {

        $sql="insert into precios
        values
        (null,?,?,?,?);
        ";
        $stmt=$this->dbh->prepare($sql);
        
        $stmt->bindValue(1,$_POST["material"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["marca"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["terminaciones"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["valorM2"],PDO::PARAM_INT);
        $stmt->execute();
        $this->dbh=null;
        header("Location:precios.php");
    }

    public function add_cliente()
    {
        $sql="insert into clientes
        values
        (null,?,?,?,?,?);   
        ";

        $stmt=$this->dbh->prepare($sql);

        $stmt->bindValue(1,$_POST["cliente"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["contacto"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["rut"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["direccion"],PDO::PARAM_STR);
        $stmt->bindValue(5,$_POST["giro"],PDO::PARAM_STR);
        $stmt->execute();
        $this->dbh=null;


            ?>
            <script type="text/javascript">
            alert('Fué registrado exitosamente');
            window.location="clientes.php";
            </script>
            
            <?php


        //header("Location:clientes.php");

    

    }
    public function add_detalle()
    {
        //print_r($_POST);
        $sql="insert into detalle_presupuesto values(null,?,?,?,?,?,?,?,?)";

        $stmt=$this->dbh->prepare($sql);

        $stmt->bindValue(1,$_POST["presupuesto"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["id_presupuesto"],PDO::PARAM_INT);
        $stmt->bindValue(3,$_POST["cliente"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["material"],PDO::PARAM_STR);
        $stmt->bindValue(5,$_POST["terminaciones"],PDO::PARAM_STR);
        $stmt->bindValue(6,$_POST["valorM2"],PDO::PARAM_INT);
        $stmt->bindValue(7,$_POST["cantidad"],PDO::PARAM_INT);
        $stmt->bindValue(8,$_POST["total"],PDO::PARAM_INT);
        $stmt->execute();
        $this->dbh=null;

       header ("Location:agregar_detalle.php");
       exit;

    }

    public function get_detalle()
    {
    self::set_names();
    $sql="select * from detalle_presupuesto
     where id_presupuesto=".$_GET["id"];

    $stmt=$this->dbh->prepare($sql);
    if($stmt->execute(array($sql)))
        {
            while($row=$stmt->fetch())
            {
                $this->detalle_presupuesto[]=$row;
            }
            return $this->detalle_presupuesto;
            $this->dbh=null;
        }
    }



 public function get_presupuesto_por_id($id)
    {

            $sql="select 
            id_presupuesto,presupuesto,cliente,proyecto,fecha
            from presupuesto 
            where
            id_presupuesto=?
             ";
            $stmt=$this->dbh->prepare($sql);
            if($stmt->execute( array($id) ) )
            {
                while($row = $stmt->fetch())
                {
                    $this->presupuesto[]=$row;
                }
                return $this->presupuesto;
                $this->dbh=null;
            }
        
    }


    public function add_presupuesto()
    {

        $sql="insert into presupuesto values(null,?,?,?,?);";

        $stmt=$this->dbh->prepare($sql);

        $stmt->bindValue(1,$_POST["presupuesto"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["cliente"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["proyecto"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["fecha"],PDO::PARAM_STR);
        $stmt->execute();
        $this->dbh=null;
        header("Location:presupuestos.php");
    }



 public function get_cliente_por_id($id)
    {

            $sql="select 
            id_cliente,cliente,contacto,rut,direccion,giro
            from clientes 
            where
            id_cliente=?
             ";
            $stmt=$this->dbh->prepare($sql);
            if($stmt->execute( array($id) ) )
            {
                while($row = $stmt->fetch())
                {
                    $this->clientes[]=$row;
                }
                return $this->clientes;
                $this->dbh=null;
            }
        
    }

 public function edit_cliente()
    {
        
        self::set_names();
        $sql="update clientes
        set
        cliente=?,
        contacto=?,
        rut=?,
        direccion=?,
        giro=?
        where
        id_cliente=?
        ";
        $stmt=$this->dbh->prepare($sql);

        $stmt->bindValue(1,$_POST["cliente"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["contacto"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["rut"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["direccion"],PDO::PARAM_STR);
        $stmt->bindValue(5,$_POST["giro"],PDO::PARAM_STR);
        $stmt->bindValue(6,$_POST["id"],PDO::PARAM_STR);
        $stmt->execute();
        $this->dbh=null;
        header("Location:clientes.php?m=2");
    }


    public function get_precio_por_id($id)
    {

            $sql="select 
            id_material,material,marca,terminaciones,valorM2
             from precios 
            where
            id_material=?
             ";
            $stmt=$this->dbh->prepare($sql);
            if($stmt->execute(array($id) ) )
            {
                while($row = $stmt->fetch())
                {
                    $this->precios[]=$row;
                }
                return $this->precios;
                $this->dbh=null;
            }
    }

    public function eliminar_precios()
    {
      
        $sql="delete from precios where id_material=".$_GET["id"];
        $this->dbh->exec($sql);

       // header("Location:precios.php");
         ?>
            <script type="text/javascript">
            alert('Fué eliminado exitosamente');
            window.location="precios.php";
            </script>
            
            <?php


    }

    public function eliminar_cliente()
    {
        $sql="delete from clientes where id_cliente=".$_GET["id"];
        $this->dbh->exec($sql);

        header("Location:clientes.php");
    }


    public function editar_precios()
    {
        // print_r($_POST);
        self::set_names();
        $sql="update precios 
            set 
            material=?,
            marca=?,
            terminaciones=?,
            valorM2=?
            where
            id_material=?";  
        $stmt=$this->dbh->prepare($sql);
        
        $stmt->bindValue(1,$_POST["material"],PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["marca"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["terminaciones"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["valorM2"],PDO::PARAM_STR);
        $stmt->bindValue(5,$_POST["id"],PDO::PARAM_STR);
        $stmt->execute();
        $this->dbh=null;
        header("Location:precios.php?m=2");
    }
}
?>
