<?php
include_once "CrudProfessor.class.php";
include_once "CrudCurso.class.php";
include_once "CrudCursoAlunos.class.php";
include_once "CrudAluno.class.php";
include_once "CrudAula.class.php";
include_once "Professor.class.php";
include_once "Curso.class.php";
/**
* 
*/
class Controller{

	
	
	public function __construct(){

	}



	public function listarProfessores(){

      $objCrud = new CrudProfessor();
      $retornoLista = $objCrud->listarProfessores();
      foreach ($retornoLista as $obj) {
        echo '<tr id="'.$obj->getId().'">';
                                               
           // echo '<td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>';
            echo '<td>'.$obj->getNome().'</td>';
            echo '<td>'.$obj->getEmail().'</td>';
            if($obj->getLoginAtivo()== 0){
                echo '<td>Indisponível</td>';
            }else{
                echo '<td>Disponível</td>';
            }
        
            echo '<td>';
            echo '<div class="table-actions">';
            echo '<a href="#" onclick="editar('.$obj->getId().')" title="editar"><i class="ik ik-edit-2"></i></a>';
            echo '<a href="#" onclick="excluir('.$obj->getId().')" title="editar"><i class="ik ik-trash-2"></i></a>';
            echo '</div>';
          
            echo '</td>';
         echo '</tr>';


      }

    }
    
    public function selectOptionProfessores(){

        $objCrud = new CrudProfessor();
        $retornoLista = $objCrud->listarProfessores();
        echo '<option selected disabled value="">Seleicone um(a) professor(a)</option>';
        if(count($retornoLista) > 0){
            foreach ($retornoLista as $obj) {
                echo '<option value="'.$obj->getId().'">'.$obj->getNome().'</option>';
                
            }
        }else{
                echo '<option value="">lista vazia</option>';
        }
        
  
    }
    //------------------------
    public function listarCursos(){

        $objCrud = new CrudCurso();
        $retornoLista = $objCrud->listarCursos();
        $objCrudAula = new CrudAula();
        $objCrudCursoAlunos = new CrudCursoAlunos();
        foreach ($retornoLista as $obj) {
            
                
            echo'<div class="col-xl-3 col-md-6" id="'.$obj->getId().'">';
            echo'    <div class="card sale-card cursoCards" >';
            echo'        <div class="card-header" style="heigth:50px;">';
            echo'            <h3 style="font-size:12px;  max-width: 25ch; font-weight: 800; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;" id="nomeCurso'.$obj->getId().'">'.$obj->getNome().'</h3>';
            echo'            <div class="dropdown no-arrow" style="top:20px; right: 10px; position: absolute;">';
            echo'                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            echo'                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>';
            echo'                </a>';
            echo'                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">';
            echo'                    <div class="dropdown-header">Opções:</div>';
            echo'                    <a class="dropdown-item" href="#" onclick="editar('.$obj->getId().')">Editar</a>';
            echo'                    <a class="dropdown-item" href="#" onclick="excluir('.$obj->getId().')">Excluir</a>';
            echo'                    <div class="dropdown-divider"></div> ';
            echo'                    <a class="dropdown-item" href="#" onclick="addAula('.$obj->getId().')">Adicionar Aula</a>';
            echo'                </div>';
            echo'            </div>';
            echo'        </div>';
            echo'        <div class="card-block text-center">';
            echo'            <div data-label="" class="radial-bar  radial-bar-lg radial-bar-danger">';
            echo'                <img id="imagemCurso'.$obj->getId().'" src="../img/cursos/'.$obj->getImg().'" alt="curso" style="width: 120px;height: 120px;margin-left: -9px;margin-top: -9px;">';
            echo'            </div>';
            echo'            <div class="row">';
            echo'                <div class="col-6">';
            echo'                    <h5 class="fw-700 mb-0">'.count($objCrudCursoAlunos->listarAlunosPorCurso($obj->getId())).'</h5>';
            echo'                    <p class="mb-0"><a href="#listarAlunos" onclick="listarAlunosCurso('.$obj->getId().')" data-toggle="modal" data-target="#listarAlunos"><b>Alunos</b></a></p>';
            echo'                </div>';
            echo'                <div class="col-6 border-left">';
                                     
                                   
                                      
            echo'                    <h5 class="fw-700 mb-0" id="qtdeAulas'.$obj->getId().'">'.count($objCrudAula->listarAulas($obj->getId())).'</h5>';
            echo'                    <p class="mb-0"><a href="#fullwindowModal" onclick="listarAulas('.$obj->getId().')" data-toggle="modal" data-target="#fullwindowModal"><b>Aulas</b></a></p></p>';
            echo'                </div>';
            echo'            </div>';
            echo'        </div>';
            echo'    </div>';
            echo'</div>';
          
        }
  
    }
    //--------------------------
    public function listarAulas(){

         
    }
	
}

?>