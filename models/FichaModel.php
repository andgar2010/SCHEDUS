<?php
require_once(realpath(dirname(__FILE__)) . '/EstadoFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/GrupoModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 * @param data
 */
class FichaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_ficha;
	/**
	 * @AttributeType String
	 */
	private $num_ficha;
	/**
	 * @AttributeType Timestamp
	 */
	private $create_time;
	/**
	 * @AttributeType Timestamp
	 */
	private $update_time;
	/**
	 * @AttributeType Integer
	 */
	private $version;
	/**
	 * @AssociationType Ficha\EstadoFichaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_ficha;
	/**
	 * @AssociationType Programa de formación\ProgramaFormacionModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_programa_formacion;
	/**
	 * @AssociationType Ficha\GrupoModel
	 * @AssociationMultiplicity 0..*
	 */
	public $grupo = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_ficha() {
		return $this->id_ficha;
	}

	/**
	 * @access public
	 * @param int id_ficha
	 * @return void
	 * @ParamType id_ficha int
	 * @ReturnType void
	 */
	public function setId_ficha($id_ficha) {
		$this->id_ficha = $id_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_ficha() {
		return $this->num_ficha;
	}

	/**
	 * @access public
	 * @param String num_ficha
	 * @return void
	 * @ParamType num_ficha String
	 * @ReturnType void
	 */
	public function setNum_ficha($num_ficha) {
		$this->num_ficha = $num_ficha;
	}

	// FUCTION

	public function insertarFicha(array $data)
    {
        try {
            // Verificar hay datos en $data
            if (
                isset($data['num_ficha']) &&
                isset($data['num_grupo']) &&
                isset($data['name_programa_formacion']) &&
                isset($data['name_nivel_programa_formacion'])
            ) {
                $dni = $data['dni'];
                $nombre_instructor = $data['nombre_instructor'];
                $apellido_instructor = $data['apellido_instructor'];
                $email = $data['email'];
                $stm = parent::conectar()->prepare(preparedSQL::FICHA_NEW);
                $stm->bindParam(1, $dni, PDO::PARAM_STR);
                $stm->bindParam(2, $nombre_instructor, PDO::PARAM_STR);
                $stm->bindParam(3, $apellido_instructor, PDO::PARAM_STR);
                $stm->bindParam(4, $email, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function getAllFichas()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_FICHAS);
            $stm->execute();
            $fichas = $stm->fetchAll(PDO::FETCH_OBJ);
            return $fichas; // Retorno completa de lista de Fichas
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function getFicha($idFichas)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_INSTRUCTOR);
            $stm->bindParam(1, $idFicha, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data instructor
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    

    public function updateDataFicha($data)
    {
        try {
            // Verificar hay datos en $data
            if (isset($data['dni']) && isset($data['nombre']) && isset($data['apellido']) && isset($data['email'])) {
                $dni = $data['dni'];
                $nombre = $data['nombre'];
                $apellido = $data['apellido'];
                $email  = $data['email'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_INSTRUCTOR);
                $stm->bindParam(1, $nombre, PDO::PARAM_STR);
                $stm->bindParam(2, $apellido, PDO::PARAM_STR);
                $stm->bindParam(3, $email, PDO::PARAM_STR);
                $stm->bindParam(4, $dni, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function updatedStatusFicha($data)
    {
        try {
            // Verificar hay datos en $data
            if (isset($data['status']) && isset($data['id_instructor'])) {
                $status = $data['status'];
                $id_instructor = $data['id_instructor'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_STATUS_INSTRUCTOR);
                $stm->bindParam(1, $status, PDO::PARAM_STR);
                $stm->bindParam(2, $id_instructor, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }
}
?>