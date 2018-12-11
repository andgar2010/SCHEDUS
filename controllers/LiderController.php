<?php


class LiderController extends Path
{
    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->modelSecurity->securityLider();
        $this->modelLider = parent::model('lider');
        $this->modelInstructor = parent::model('instructor');
        $this->modelFicha = parent::model('ficha');
        $this->modelEstadoFicha = parent::model('estadoFicha');
        $this->modelNivelProgramaFormacion = parent::model('nivelProgramaFormacion');
        $this->modelProgramaFormacion = parent::model('programaFormacion');
        $this->modelProyecto = parent::model('proyecto');
        $this->modelGrupo = parent::model('grupo');
        $this->modelCompetencia = parent::model('competencia');
        $this->modelTrimestre = parent::model('trimestre');
        $this->modelJornada = parent::model('jornada');
        $this->modelAmbiente = parent::model('ambiente');
        $this->modelRutaFicha = parent::model('rutaFicha');
        $this->modelSede = parent::model('sede');
        $this->modelResultadoAprendizaje = parent::model('resultadoAprendizaje');
        $this->modelEstadoAmbiente = parent::model('estadoAmbiente');
    }

    //
    // ──────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: R E N D E R I Z A D O   V I S T A S : :  :   :    :     :        :          :
    // ──────────────────────────────────────────────────────────────────────────────────────
    //
    public function index()
    {
        parent::viewModule('lider', 'index', 'Incio');
    }

    public function Horarios()
    {
        parent::viewModule('lider', 'Horarios', 'Horarios');
    }

    public function Programas($msgType = [])
    {
        $data['programaFormacion'] = $this->modelProgramaFormacion->getAllProgramaFormacion();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Programas', 'Programas', $data);
    }

    public function TrimestresPrograma($msgType = [])
    {
        $data['trimestre'] = $this->modelTrimestre->getAllTrimestre();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'TrimestresPrograma', 'Trimestres Programa', $data);
    }

    public function Competencias($msgType = [])
    {
        $data['competencia'] = $this->modelCompetencia->getAllCompetencia();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Competencias', 'Competencias', $data);
    }

    public function Ambiente($msgType = [])
    {
        $data['ambiente'] = $this->modelAmbiente->getAllAmbiente();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Ambiente', 'Ambiente', $data);
    }

    public function Niveles($msgType = [])
    {
        $data['nivelProgramaFormacion'] = $this->modelNivelProgramaFormacion->getAllNivelFormacion();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Niveles', 'Niveles', $data);
    }

    public function Proyecto($msgType = [])
    {
        $data['proyecto'] = $this->modelProyecto->getAllProyecto();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Proyecto', 'Proyecto', $data);
    }

    public function Fichas($msgType=[])
    {

        $fichas = $this->modelFicha->getAllFichas();
        $grupos = $this->modelGrupo->getAllGrupos();
        $estadoFicha = $this->modelEstadoFicha->getAllEstadoFicha();
        $nivelFormacion = $this->modelNivelProgramaFormacion->getAllNivelFormacion();
        $programaFormacion = $this->modelProgramaFormacion->getAllProgramaFormacion();

        $data['msgType'] = $msgType;
        $data['fichas'] = $fichas;
        $data['grupos'] = $grupos;
        $data['estadoFicha'] = $estadoFicha;
        $data['nivelFormacion'] = $nivelFormacion;
        $data['programaFormacion'] = $programaFormacion;
        parent::viewModule('lider', 'Fichas', 'Fichas', $data);
    }

    public function Jornadas($msgType = [])
    {
        $data['jornada'] = $this->modelJornada->getAllJornada();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Jornadas', 'Jornadas', $data);
    }
    public function Fusionar()
    {
        parent::viewModule('lider', 'Fusionar', 'Fusionar');
    }
    public function Instructor($msgType = [])
    {
        $instructores = $this->modelInstructor->getAllInstructores();
        $data['msgType'] = $msgType;
        $data['instructores'] = $instructores;
        parent::viewModule('lider', 'Instructores', 'Instructores', $data);
    }

    public function Grupos($msgType = [])
    {
        $data['rutaFichasjornadas'] = $this->modelRutaFicha->getAllRutaFichasJornadas();
        $data['v_ruta_ficha'] = $this->modelRutaFicha->getAllRuta_Fichas();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Grupos', 'Grupos', $data);
    }

    public function EstadoAmbiente($msgType = [])
    {
        $data['estadoAmbiente'] = $this->modelEstadoAmbiente->getAllEstadoAmbiente();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'estadoAmbiente', 'Estado Ambiente', $data);
    }

    public function Sede($msgType = [])
    {
        $data['sede'] = $this->modelSede->getAllSede();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Sede', 'Sede', $data);
    }

    public function Resultados($msgType = [])
    {
        $data['resultadoAprendizaje'] = $this->modelResultadoAprendizaje->getAllResultadoAprendizaje();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'Resultado', 'Resultado', $data);
    }

    public function EstadoFicha($msgType = [])
    {
        $data['estadoFicha'] = $this->modelEstadoFicha->getAllEstadoFicha();
        $data['msgType'] = $msgType;
        parent::viewModule('lider', 'EstadoFicha', 'Estado Ficha', $data);
    }

    //
    // ────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: C O N T R O L   D E   M O D U L O : :  :   :    :     :        :          :
    // ────────────────────────────────────────────────────────────────────────────────────
    //

    //
    // ─── CONTROL DE INSTRUCTOR ──────────────────────────────────────────────────────
    //


    public function insertarInstructor()
    {
        $data = $_POST;
        $result = $this->modelInstructor->insertarInstructor($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo instructor',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo registrar nuevo instructor',
            );
        }
        $this->Instructor($msgType);
    }

    public function changeStatusInstructor()
    {
        if ($_POST['state_id'] == "2") {
            $status = "3";
        } else if ($_POST['state_id'] == "3") {
            $status = "2";
        }

        $data = array(
            "id_instructor" => $_POST['id_instructor'],
            "status" => $status,
        );

        $result = $this->modelInstructor->updatedStatusInstructor($data); // Enviar al DB
    }

    public function getDataInstructor()
    {
        $dataInstructor = json_encode($this->modelInstructor->getInstructor($_POST['id_instructor']));
        echo $dataInstructor;
    }

    public function updateDataInstructor()
    {
        // var_dump($_POST);
        $data = array(
            "dni" => $_POST['dni'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "email" => $_POST['email'],
        );
        $result = $this->modelInstructor->updateDataInstructor($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de instructor',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos instructor',
            );
        }

        $this->Instructor($msgType);
    }


    //
    // ─── CONTROL DE FICHA ───────────────────────────────────────────────────────────
    //


    public function insertarFicha()
    {
        $data = $_POST;
        $result = $this->modelFicha->insertarFicha($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Ficha',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Ficha',
            );
        }
        $this->Fichas($msgType);
    }

    public function changeStatusFicha()
    {
        if ($_POST['state_id'] == "2") {
            $status = "3";
        } else if ($_POST['state_id'] == "3") {
            $status = "2";
        }

        $data = array(
            "id_Ficha" => $_POST['id_Ficha'],
            "status" => $status,
        );

        $result = $this->modelFicha->updatedStatusFicha($data); // Enviar al DB
    }

    public function getDataFicha()
    {
        $dataFicha = json_encode($this->modelFicha->getFicha($_POST['idFicha']));
        echo $dataFicha;
    }

    public function getAllDataFichas()
    {
        $dataFicha = $this->modelFicha->getAllFichas();
        $dataFicha = json_encode($dataFicha);
        echo $dataFicha;
    }

    public function updateDataFicha()
    {
        //var_dump($_POST);
        $data = array(
            "id_ficha" => $_POST['id_ficha'],
            "num_ficha" => $_POST['num_ficha'],
            "upd_cod_programa_formacion" => $_POST['upd_cod_programa_formacion'],
            "upd_cod_estado_ficha" => $_POST['upd_cod_estado_ficha'],
        );
        $result = $this->modelFicha->updateDataFicha($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizando datos de la ficha',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo actualizar datos de la ficha',
            );
        }
        $this->Fichas($msgType);
    }

    //
    // ─── CONTROL ESTADO FICHA ────────────────────────────────────────
    //

    public function getDataEstadoFicha()
    {
        // Completa lista de estado de ficha
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelEstadoFicha->getAllEstadoFicha();
        }
        // Selecciona ID de estado de ficha
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelEstadoFicha->getEstadoFichaId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de ficha
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelEstadoFicha->getEstadoFichaName($_REQUEST['q']);
        }

        $dataEstadoFicha = json_encode($output);
        echo $dataEstadoFicha;
    }

    public function insertarEstadoFicha()
    {
        $data = $_POST;
        $result = $this->modelEstadoFicha->insertarEstadoFicha($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Estado',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Estado',
            );
        }
        $this->EstadoFicha($msgType);
    }


    //
    // ─── CONTROL NIVEL PROGRAMA DE FORMACION ────────────────────────────────────────
    //


    public function getDataNivelProgramaFormacion()
    {
        // Completa lista de Nivel Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelNivelProgramaFormacion->getAllNivelFormacion();
        }
        // Selecciona ID de Nivel Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelNivelProgramaFormacion->getNivelFormacionId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de Nivel Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelNivelProgramaFormacion->getNivelFormacionName($_REQUEST['q']);
        }

        $dataNivelFormacion = json_encode($output);
        echo $dataNivelFormacion;
    }

    //
    // --- CONTROL PROGRAMA DE FORMACION ----------------------------------------
    //

    public function getDataProgramaFormacion()
    {
        // Completa lista de Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id']) && !isset($_REQUEST['codigo'])) {
            $output = $this->modelProgramaFormacion->getAllProgramaFormacion();
        }
        // Selecciona ID de Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionId($_REQUEST['id']);
        }
        elseif (isset($_REQUEST['codigo'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionCodigo($_REQUEST['codigo']);
        }
        // Selecciona caracteres en lista de Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionName($_REQUEST['q']);
        }

        $dataFormacionPrograma = json_encode($output);
        echo $dataFormacionPrograma;
    }

    public function insertarProgramaFormacion()
    {
        $data = $_POST;
        $result = $this->modelProgramaFormacion->insertarProgramaFormacion($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Programa de Formacion',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Programa de Formacion',
            );
        }
        $this->Programas($msgType);
    }

    public function updateDataProgramaFormacion()
    {

        if (isset($_POST)) {
            $data = array(
                "txtUpdIdPrograma" => $_POST['txt_upd_id_programa'],
                "txtUpdCodPrograma" => $_POST['txt_upd_cod_programa'],
                "txtUpdShortNamePrograma" => $_POST['txt_upd_short_name_programa'],
                "txtUpdNameProgramaFormacion" => $_POST['txt_upd_name_programa_formacion'],
                "txtUpdVersionPrograma" => $_POST['txt_upd_version_programa'],
                "txtUpdIdNivelProgramaFormacion" => $_POST['txt_upd_id_nivel_programa_formacion'],
                "txtUpdCodProyecto" => $_POST['txt_upd_cod_proyecto'],
            );
            $result = $this->modelProgramaFormacion->updateDataProgramaFormacion($data);
            if ($result) {
                $msgType = array(
                    'type' => 'success',
                    'title' => 'AVISO',
                    'msg' => 'Exito actualizado datos de Programa de Formacion',
                );
            } else {
                $msgType = array(
                    'type' => 'error',
                    'title' => 'AVISO',
                    'msg' => 'No se pudo actualizar Programa de Formacion',
                );
            }
            $this->Programas($msgType);
        }

    }

    public function changeStatusProgaramaFormaciom()
    {

        if ($_POST['state_id'] == "1") {
            $status = "2";
        } else if ($_POST['state_id'] == "2") {
            $status = "1";
        }

        $data = array(
            "id_programa_formacion" => $_POST['id_programa_formacion'],
            "cod_estado_programa_formacion" => $status,
        );

        $this->modelProgramaFormacion->updateStatusProgramaFormacion($data);
    }

    //
    // ─── CONTROL DE PROYECTO ────────────────────────────────────────────────────────
    //


    public function getDataProyecto()
    {
        // Completa lista de Proyecto
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelProyecto->getAllProyecto();
        }
        // Selecciona ID de Proyecto
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelProyecto->getProyectoId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de Proyecto
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelProyecto->getProyectoName($_REQUEST['q']);
        }

        $dataProyecto = json_encode($output);
        echo $dataProyecto;
    }

    public function insertarProyecto()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelProyecto->insertarProyecto($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Proyecto',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Proyecto',
            );
        }
        $this->Proyecto($msgType);
    }

    public function updateDataProyecto()
    {
        /* var_dump($_POST); */
        $data = array(
            "id_proyecto" => $_POST['txt_upd_id_proyecto'],
            "name_proyecto" => $_POST['txt_upd_proyecto'],
        );
        $result = $this->modelProyecto->updateDataProyecto($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Nivel de Proyecto',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Nivel de Proyecto',
            );
        }

        $this->Proyecto($msgType);
    }


    //
    // ─── CONTROL DE NIVEL DE FORMACION ──────────────────────────────────────────────
    //


    public function getDataNivelFormacion()
    {
        // Completa lista de Nivel de formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelNivelProgramaFormacion->getAllNivelFormacion();
        }
        // Selecciona ID de Nivel de formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelNivelProgramaFormacion->getNivelFormacionId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de Nivel de formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelNivelProgramaFormacion->getNivelFormacionName($_REQUEST['q']);
        }
        $dataNivelFormacion = json_encode($output);
        echo $dataNivelFormacion;
    }

    public function insertarNivelFormacion()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelNivelProgramaFormacion->insertarNivelFormacion($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Nivel Formacion',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Nivel Formacion',
            );
        }
        $this->Niveles($msgType);
    }

    public function updateDataNivelFormacion()
    {
        /* var_dump($_POST); */
        $data = array(
            "id_nivel_programa_formacion" => $_POST['txt_upd_id_nivel_programa_formacion'],
            "name_nivel_programa_formacion" => $_POST['txt_upd_name_nivel_programa_formacion'],
            "duracion" => $_POST['txt_upd_duracion'],
        );
        $result = $this->modelNivelProgramaFormacion->updateDataNivelFormacion($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Nivel de formación',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Nivel de formación',
            );
        }

        $this->Niveles($msgType);
    }

    //
    // ─── CONTROL DE AMBIENTE ────────────────────────────────────────────────────────
    //


    public function getDataAmbiente()
    {
        // Completa lista de estado de ficha
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelAmbiente->getAllAmbiente();
        }
        // Selecciona ID de estado de ficha
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelAmbiente->getAmbienteId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de ficha
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelAmbiente->getAmbienteName($_REQUEST['q']);
        }

        $dataAmbiente = json_encode($output);
        echo $dataAmbiente;
    }

    
    public function insertaAmbienteFormacion()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelAmbiente->insertaAmbienteFormacion($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Ambiente',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Ambiente',
            );
        }
        $this->ambiente($msgType);
    }

    // public function updateDataCompetencias()
    // {
    //     // var_dump($_POST);
    //     $data = array(
    //         "id_competencia" => $_POST['txt_upd_id_competencia'],
    //         "cod_programa_formacion" => $_POST['txt_upd_cod_programa_formacion'],
    //         "codigo_competencia" => $_POST['txt_upd_cod_competencia1'],
    //         "num_competencia2" => $_POST['txt_upd_cod_competencia2'],
    //         "name_competencia" => $_POST['txt_upd_name_competencia'],
    //     );
    //     $result = $this->modelCompetencia->updateDataCompetencia($data);

    //     if ($result) {
    //         $msgType = array(
    //             'type' => 'success',
    //             'title' => 'AVISO',
    //             'msg' => 'Exito actualizado datos de Competencias de formación',
    //         );
    //     } else {
    //         $msgType = array(
    //             'type' => 'error',
    //             'title' => 'AVISO',
    //             'msg' => 'No se pudo actualizar datos Competencias de formación',
    //         );
    //     }

    //     $this->Competencias($msgType);
    // }

    //
    // ─── CONTROL DE GRUPO ───────────────────────────────────────────────────────────
    //

    public function getDataGrupo()
    {
        // Completa lista de estado de ficha
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelAmbiente->getAllAmbiente();
        }
        // Selecciona ID de estado de ficha
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelAmbiente->getAmbienteId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de ficha
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelAmbiente->getAmbienteName($_REQUEST['q']);
        }

        $dataAmbiente = json_encode($output);
        echo $dataAmbiente;
    }

    //
    // ─── CONTROL DE COMPETENCIA ───────────────────────────────────────────────────────────
    //

    public function getDataCompetencia()
    {
        // Completa lista de estado de ficha
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelCompetencia->getAllCompetencia();
        }
        // Selecciona ID de estado de ficha
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelCompetencia->getCompetenciaId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de ficha
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelCompetencia->getCompetenciaName($_REQUEST['q']);
        }

        $dataCompetencia = json_encode($output);
        echo $dataCompetencia;
    }

    public function insertarCompetencias()
    {
        // var_dump($_POST);
        $data=$_POST;
        $result = $this->modelCompetencia->insertarCompetencia($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Competencia',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Competencia',
            );
        }
        $this->Competencias($msgType);
    }

    public function updateDataCompetencias()
    {
        // var_dump($_POST);
        $data = array(
            "id_competencia" => $_POST['txt_upd_id_competencia'],
            "cod_programa_formacion" => $_POST['txt_upd_cod_programa_formacion'],
            "codigo_competencia" => $_POST['txt_upd_cod_competencia1'],
            "num_competencia2" => $_POST['txt_upd_cod_competencia2'],
            "name_competencia" => $_POST['txt_upd_name_competencia'],
        );
        $result = $this->modelCompetencia->updateDataCompetencia($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Competencias de formación',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Competencias de formación',
            );
        }

        $this->Competencias($msgType);
    }

    //
    // ─── CONTROL DE JORNADA ───────────────────────────────────────────────────────────
    //

    public function getDataJornada()
    {
        // Completa lista de estado de jornada
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelJornada->getAllJornada();
        }
        // Selecciona ID de estado de jornada
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelJornada->getJornadaId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de jornada
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelJornada->getJornadaName($_REQUEST['q']);
        }

        $modelJornada = json_encode($output);
        echo $modelJornada;
    }

    public function insertarJornada()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelJornada->insertarJornada($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Jornada',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Jornada',
            );
        }
        $this->Jornadas($msgType);
    }

    public function updateDataJornada()
    {
        // var_dump($_POST);
        $data = array(
            "id_jornada" => $_POST['txt_upd_id_jornada'],
            "name_jornada" => $_POST['txt_upd_name_jornada'],
        );
        $result = $this->modelJornada->updateDataJornada($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Jornada',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Jornada',
            );
        }

        $this->Jornadas($msgType);
    }

    //
    // ─── CONTROL DE ESTADO AMBIENTE ───────────────────────────────────────────────────────────
    //

    public function getDataEstadoAmbiente()
    {
        // Completa lista de estado de Ambiente
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelEstadoAmbiente->getAllEstadoAmbiente();
        }
        // Selecciona ID de estado de Ambiente
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelEstadoAmbiente->getEstadoAmbienteId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de Ambiente
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelEstadoAmbiente->getEstadoAmbienteName($_REQUEST['q']);
        }

        $modelEstadoAmbiente = json_encode($output);
        echo $modelEstadoAmbiente;
    }

    public function insertarEstadoAmbiente()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelEstadoAmbiente->insertarEstadoAmbiente($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Estado Ambiente',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Estado Ambiente',
            );
        }
        $this->EstadoAmbiente($msgType);
    }

    public function updateDataEstadoAmbiente()
    {
        //var_dump($_POST);
        $data = array(
            "id_estado_ambiente" => $_POST['txt_upd_id_estado_ambiente'],
            "name_estado_ambiente" => $_POST['txt_upd_name_estado_ambiente'],
        );
        $result = $this->modelEstadoAmbiente->updateDataEstadoAmbiente($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Estado Ambiente',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Estado Ambiente',
            );
        }

        $this->EstadoAmbiente($msgType);
    }


    //
    // ─── CONTROL DE SEDE ───────────────────────────────────────────────────────────
    //

    public function getDataSede()
    {
        // Completa lista de estado de jornada
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelSede->getAllSede();
        }
        // Selecciona ID de estado de jornada
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelSede->getSedeId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de jornada
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelSede->getSedeName($_REQUEST['q']);
        }

        $modelSede = json_encode($output);
        echo $modelSede;
    }

    public function insertarSede()
    {
        // var_dump($_POST);
        $data = $_POST;
        $result = $this->modelSede->insertarSede($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Sede',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Sede',
            );
        }
        $this->Sede($msgType);
    }

    public function updateDataSede()
    {
        // var_dump($_POST);
        $data = array(
            "id_sede" => $_POST['txt_upd_id_sede'],
            "name_sede" => $_POST['txt_upd_name_sede'],
            "direccion" => $_POST['txt_upd_direccion'],
        );
        $result = $this->modelSede->updateDataSede($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Sede',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Sede',
            );
        }

        $this->Sede($msgType);
    }

    //
    // ─── CONTROL DE TRIMESTRE PROGRAMA ───────────────────────────────────────────────────────────
    //

    public function getDataTrimestre()
    {
        // Completa lista de estado de jornada
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelTrimestre->getAllTrimestre();
        }
        // Selecciona ID de estado de jornada
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelTrimestre->getTrimestreId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de jornada
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelTrimestre->getTrimestreName($_REQUEST['q']);
        }

        $modelTrimestre = json_encode($output);
        echo $modelTrimestre;
    }

    public function insertarTrimestresPrograma()
    {
        // var_dump($_POST);
        $fechas = explode(' ', $_POST['fecha']);

        $fecha_inicio = $fechas[0];
        $fecha_fin = $fechas[2];

        $fecha_inicio = explode('/', $fecha_inicio);
        $fecha_fin = explode('/', $fecha_fin);

        $data = array(
            // 'name_trimestre', 'YYYY-MM-DD', 'YYYY-MM-DD'
            "name_trimestre" => $_POST['name_trimestre'],
            "fecha_inicio" => $fecha_inicio[2].'-'.$fecha_inicio[1]. '-'. $fecha_inicio[0] ,
            "fecha_fin" => $fecha_fin[2].'-'.$fecha_fin[1]. '-'. $fecha_fin[0] ,
        );
        $result = $this->modelTrimestre->insertarTrimestresPrograma($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Trimestre de Programa de formacion',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Trimestre de Programa de formacion',
            );
        }
        $this->TrimestresPrograma($msgType);
    }

    public function updateDataTrimestresPrograma()
    {
        $fechas = explode(' ', $_POST['txt_upd_fecha']);
        var_dump($_POST);

        $fecha_inicio = $fechas[0];
        $fecha_fin = $fechas[1];

        $fecha_inicio = explode('-', $fecha_inicio);
        $fecha_fin = explode('-', $fecha_fin);

        $data = array(
            // 'name_trimestre', 'YYYY-MM-DD', 'YYYY-MM-DD'
            "id_trimestre" => $_POST['txt_upd_id_trimestre'],
            "name_trimestre" => $_POST['txt_upd_name_trimestre'],
            "fecha_inicio" => $fecha_inicio[2].'-'.$fecha_inicio[1]. '-'. $fecha_inicio[0] ,
            "fecha_fin" => $fecha_fin[2].'-'.$fecha_fin[1]. '-'. $fecha_fin[0] ,
        );
        $this->modelTrimestre->updateDataTrimestresPrograma($data);
        /* $result = $this->modelTrimestre->updateDataTrimestresPrograma($data); */

        /* if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Trimestre de Programa de formacion',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Trimestre de Programa de formacion',
            );
        }
 */
       // $this->TrimestresPrograma($msgType);
    }

    //
    // ─── CONTROL DE TRIMESTRE PROGRAMA ───────────────────────────────────────────────────────────
    //

    public function getDataRutaFicha()
    {
        // Completa lista de Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id']) && !isset($_REQUEST['codigo'])) {
            $output = $this->modelFicha->getAllRuta_Fichas();
        }
        // Selecciona ID de Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelFicha->getRutaFichaId($_REQUEST['id']);
        }
        elseif (isset($_REQUEST['codigo'])) {
            $output = $this->modelFicha->getRutaFichaCodigo($_REQUEST['codigo']);
        }
        // Selecciona caracteres en lista de Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelFicha->getRutaFichaName($_REQUEST['q']);
        }

        $dataRutaFicha = json_encode($output);
        echo $dataRutaFicha;
    }

    //
    // ─── CONTROL DE RESULTADO APRENDIZAJE ───────────────────────────────────────────────────────────
    //

    public function getDataResultadoAprendizaje()
    {
        // Completa lista de Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id']) && !isset($_REQUEST['codigo'])) {
            $output = $this->modelResultadoAprendizaje->getAllResultadoAprendizaje();
        }
        // Selecciona ID de Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelResultadoAprendizaje->getResultadoAprendizajeId($_REQUEST['id']);
        }
        elseif (isset($_REQUEST['codigo'])) {
            $output = $this->modelResultadoAprendizaje->getResultadoAprendizajeCodigo($_REQUEST['codigo']);
        }
        // Selecciona caracteres en lista de Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelResultadoAprendizaje->getResultadoAprendizajeName($_REQUEST['q']);
        }

        $dataResultadoAprendizaje = json_encode($output);
        echo $dataResultadoAprendizaje;
    }

    public function insertarResultadoAprendizaje()
    {
        // var_dump($_POST);
        $data=$_POST;
        $result = $this->modelResultadoAprendizaje->insertarResulatdoAprendizaje($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo Resultado de Aprendizaje',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo Resultado de Aprendizaje',
            );
        }
        $this->Resultados($msgType);
    }

    public function updateDataResultadoAprendizaje()
    {
        // var_dump($_POST);
        $data = array(
            "id_resultado_aprendizaje" => $_POST['txt_upd_id_resultado_aprendizaje'],
            "num_resultado_aprendizaje1" => $_POST['txt_upd_num_resultado_aprendizaje1'],
            "cod_competencia" => $_POST['selectUpdListCompetencia'],
            "name_resultado_aprendizaje" => $_POST['txt_upd_name_resultado_aprendizaje'],
        );
        $result = $this->modelResultadoAprendizaje->updateDataResultadoAprendizaje($data);

        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Resultado de Aprendizaje',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos Resultado de Aprendizaje',
            );
        }

        $this->Resultados($msgType);
    }

}

