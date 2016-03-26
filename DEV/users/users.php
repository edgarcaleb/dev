<?php

/*
* AUTOR: EDGAR CALEB MUÑOZ FERNADEZ
* AÑO 03-03-2016
*/




/*
* 	Autor: edgar caleb muñoz fernandez.....
*	Descripcion: modelo instanciento de session... 
*	Año: 08-10-2015.....
*/
require_once '../controllers/db.php'; //llamado de requerimiento en los pareametros de conexion DB...
require_once '_session.php'; //llamado del modelo estructural de session...

class acces 
{
	// atributos de adquiere un usuario para instanciar una variable session...

	private $table;
	private $table2;
	private $db;
	private $se;
    private $alumno;
	function __construct()
	{
		$this->db=new db(); //contruccion del objeto de conexion db...
		$this->se=new session(); //contruccion del objeto session....
		$this->table="usuarios"; //nombre de la table  de consulta....
		$this->table2="perfiles"; //nombre de la table  de consulta....
        $this->table3="personas"; //nombre de la table  de consulta....
	}

	public function ctrl_session()
	{
		
			if (!empty($_POST['user']) && !empty($_POST['pwd'])) { // se valida los campos del formulario users. en caso de que este sea forsado por fuerza bruta.....

				$query=$this->db->prepare("SELECT * FROM $this->table U INNER JOIN $this->table2 P ON U.idPerfiles = P.idPerfiles WHERE U.usuarios =? AND U.passwords=?");
				$query->bindparam(1, $_POST["user"]);
				$query->bindparam(2, $_POST["pwd"]);//encript de password user...
				$query->execute(); // ejecucion del statement...

				$respuest=$query->fetchAll(PDO::FETCH_ASSOC);


				if ($respuest) {
					$data=$respuest[0];
                    
                  /*  switch($data){
                        case 'admin':*/
                        //logueo del usuario...
                        $this->se->init();
                        $this->se->set('idUsuario',    $respuest[0]["idUsuarios"]);
                        $this->se->set('usuario',  $respuest[0]["usuarios"]);
                        $this->se->set('persona',  $respuest[0]["nombrePersona"]);
                        $this->se->set('idPerfil',   $respuest[0]["idPerfiles"]);
                        $this->se->set('perfil',  $respuest[0]["nombresPerfiles"]);

                
                        header("location:../main.php");
                   /* break;
                    }*/
				}else{
					header("location:../index.php?error=1");
					//throw new Exception("Error Processing Request: DATOS NULL....!", 1);
				}

			} else {
				header("location:../index.php?error=2");
				//throw new Exception("Error Processing Request", 1);
				
			}
	}
    
    public function setAlumno($alumno){
        $this->alumno=$alumno;
    }
    public function getAlumno(){
        return $this->alumno;
    }
    
    public function b_alumnos_group(){
        
        
        
        $query=$this->db->prepare("SELECT * FROM `alumnos` WHERE alumnos LIKE $this->alumno%");
        
		return $query->execute(); // ejecucion del statement...
        
    }
}