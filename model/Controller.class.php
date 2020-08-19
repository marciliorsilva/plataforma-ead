<?php
include_once "../adm/model/CrudCursoAlunos.class.php";
include_once "../adm/model/CrudAula.class.php";
class Controller{

	
	
	public function __construct(){

    }
    
    public function listarCursosAluno($id){
        $objCrud = new CrudCursoAlunos();
        $objCrudAula = new CrudAula();
        $retornoLista = $objCrud->listarCursosAluno($id);
        foreach ($retornoLista as $obj) {
            echo'<main>';
            echo'<div class="flex-main">';
            echo'<div>';
            echo'<img src="../adm/img/cursos/'.$obj->getObjCurso()->getImg().'" alt="">';
            echo'</div>';
            echo'<div>';
            echo'<span class="hashtag">#Instagram e Facebook</span><br>';
            echo'<span class="title">'.$obj->getObjCurso()->getNome().'</span> <br>';
            echo'<span class="paragraph">'.$obj->getObjCurso()->getDescricao().'</span>';                    
            echo'</div>';
            echo'</div>';
            echo'<span class="paragraph-2">'.$obj->getObjCurso()->getDescricao().'</span>';
            echo'</main>';
            echo'<section class="container-lessons">';
            $retornoLista2 = $objCrudAula->listarAulas($obj->getObjCurso()->getId());
            if(count($retornoLista2)>0){
                foreach ($retornoLista2 as $obj2) {
                    echo'<section class="accordion">';
                    echo'<input type="checkbox" id="handle1">';
    
                    echo'<h2 class="handle">';
                    echo'<label for="handle1">';
                    echo'<div>';
                    echo' <img src="img/img_0008.svg">';
                    echo $obj2->getTitulo();
                    echo'<span class="date">'.$obj2->getData().' | '.$obj2->getHora().'</span>';
                    echo'</div>';
                    echo'<span class="arrow"></span>';
                    echo'</label>';
                    echo'</h2>';
                    echo'<div class="content">';
                    echo'<div class="first-div-content">';
                    echo'<iframe width="560" height="315" src="'.$obj2->getLink().'" frameborder=”0″ allowfullscreen></iframe></div>';
    
                    echo'<div class="flex-content">';
                    echo'<div>';
                    echo'<p>'.$obj2->getDescricao().'</p>';
                    echo'</div>';
                    echo'<div>';
                    echo'<a href="2e6f9b0d5885b.php"><img class="a" src="img/img_0012.svg"> Assistir</a>';
                    echo'</div>';
                    echo'</div>';
                    echo'</div>';
                    echo'</section>';
    
                    
    
                }
            }else{
                echo'<center><p>Esse treinamento não cotem aulas disponiveis no momento.</p></center>';
            }
            
            echo'</section>';
            
            
        }
    }








}


?>