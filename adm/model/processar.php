<?php 
include_once "Login.class.php";
include_once "CrudCurso.class.php";
include_once "CrudCursoAlunos.class.php";
include_once "CrudProfessor.class.php";
include_once "CrudAula.class.php";
include_once "CrudAluno.class.php";
include_once "Curso.class.php";
include_once "CursoAlunos.class.php";
include_once "Professor.class.php";
include_once "Aula.class.php";
include_once "Aluno.class.php";

$objLogin = new Login();
$objCrudCurso = new CrudCurso();
$objCrudCursoAlunos = new CrudCursoAlunos();
$objCrudAula = new CrudAula();
$objCrudAluno = new CrudAluno();
$objCrudProfessor = new CrudProfessor();
$objCurso = new Curso();


$metodo = $_POST['metodo'];
$entidade = $_POST['entidade'];
$retorno="";

switch($entidade){
    case 'login':
        switch($metodo){
            case 'logar':
                $email = $_POST['email'];
                $senha = $_POST['senha'];
              
                $retorno = $objLogin->logar($email,sha1($senha));
                
                if($retorno == 'erroSenha' ){
                  echo "1";
                }else if($retorno == 'usuarioInexistente' ){
                  echo "2";
                }else if($retorno == 'logado'){
                  echo "3";
                }else if($retorno == 'loginEfetuado'){
                  echo "4";
                }
                
                break;

        }
        break;
    case 'curso':
        switch($metodo){
          case 'cadastrar-curso':

              $nome = $_POST['nome'];
              $img = $_FILES["img"]["tmp_name"];
              $descricao = $_POST['descricao'];
              $hashtag = $_POST['tags'];
              $idProfessor = $_POST['idProfessor'];
              
              if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
                  $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
                  $nomeImg = $_FILES[ 'img' ][ 'name' ];
              
                  // Pega a extensão
                  $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
              
                  // Converte a extensão para minúsculo
                  $extensao = strtolower ( $extensao );
                  if ( strstr ( '.jpg;.jpeg;.png;.svg', $extensao ) ) {
                      // Cria um nome único para esta imagem
                      // Evita que duplique as imagens no servidor.
                      // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                      $novoNome = uniqid ( rand ()) . '.' . $extensao;
                                      
                      // Concatena a pasta com o nome
                      $destino = '../img/cursos/' . $novoNome;
                      $retorno = $objCrudCurso->cadastrarCurso($nome,$novoNome,$hashtag,$descricao,$idProfessor);
                      if($retorno == true){
                        // tenta mover o arquivo para o destino
                          if (!@move_uploaded_file($arquivo_tmp, $destino)){
                            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';

                          }else{
                            echo '1';
                          }
                          

                      }

                  }else{               
                    echo "2"; // erro de extensao;
                  } 
              // fim imagem escolhida
              }else{
                  $retorno = $objCrudCurso->cadastrarCurso($nome,$img,$hashtag,$descricao,$idProfessor);
                  if($retorno == true){
                  
                    echo '1';

                  }else{
                    echo '2';
                  }
              }
            
              break;

         
          
          case 'editar-curso':

              $id = $_POST['idCurso'];
              $nome = $_POST['nome'];
              $img = $_FILES["img"]["tmp_name"];
              $imgTemp = $_POST['img-temp'];
              $descricao = $_POST['descricao'];
              $hashtag = $_POST['tags'];
              $idProfessor = $_POST['idProfessor'];
              if($img == ""){
                  $retorno2 = $objCrudCurso->editarCurso($id,$nome,$imgTemp,$hashtag,$descricao,$idProfessor);
                  if($retorno2 == true){
                    echo "1";
                  }else{
                    echo "2";
                  }
                
              }else{

                if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
                    $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
                    $nomeImg = $_FILES[ 'img' ][ 'name' ];
                    // Pega a extensão
                    $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
              
                    // Converte a extensão para minúsculo
                    $extensao = strtolower ( $extensao );
                    if ( strstr ( '.jpg;.jpeg;.png;.svg', $extensao ) ) {
                        // Cria um nome único para esta imagem
                        // Evita que duplique as imagens no servidor.
                        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                        $novoNome = uniqid ( rand ()) . '.' . $extensao;
                        if($imgTemp == ""){
                          $imgTemp = "naotemimagem.png";
                        }              
                        // Concatena a pasta com o nome
                        $destino = '../img/cursos/' . $novoNome;
                        $remover = '../img/cursos/' . $imgTemp;
                        
                        
                        //$retorno3 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                        if( file_exists( $remover ) ){
                          unlink( $remover );
                          $retorno4 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                          if($retorno4 == true){
                              // tenta mover o arquivo para o destino
                              if (!@move_uploaded_file($arquivo_tmp, $destino)){
                                  echo "3";
      
                              }
                              echo "1";
                              
                              
                          }else{
                              echo "2";
                          }
                        }else{
                          $retorno4 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                          if($retorno4 == true){
                              // tenta mover o arquivo para o destino
                              if (!@move_uploaded_file($arquivo_tmp, $destino)){
                                  echo "3";
      
                              }
                              echo "1";
                              
                              
                          }else{
                              echo "2";
                          }

                        }
                        
                        
                    }
                   

                }

                 
              }
              break;

          case 'excluir-curso':
            $id = $_POST['id'];
            $img = $_POST['img'];
            $retornoExcluir = $objCrudCurso->exluirCurso($id);
           
            if($retornoExcluir == true){
              if( file_exists( $img ) ){
                unlink($img);
              }
              echo "1";
            }else if($retornoExcluir == false){
              echo "2";
            }
            break;
          case 'listarAlunos':
            $id = $_POST['id'];
            $retornoLista = $objCrudCursoAlunos->listarAlunosPorCurso($id);
            foreach ($retornoLista as $obj) {
              echo '<tr id="'.$obj->getId().'">';
                                                     
                  
                  echo '<td>'.$obj->getObjAluno()->getNome().'</td>';
                  echo '<td>'.$obj->getObjAluno()->getEmail().'</td>';
                  if($obj->getObjAluno()->getLoginAtivo()== 0){
                      echo '<td><div class="p-status bg-red"></div></td>';
                  }else{
                      echo '<td><div class="p-status bg-green"></div></td>';
                  }
                              
                  echo '</td>';
               echo '</tr>';
      
      
            }
            break;



        }
        break;
    case 'professor':
      switch($metodo){
        case 'cadastrar':
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          
          $retorno = $objCrudProfessor->cadastrarProfessor($nome, $email);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;
        case 'editar':
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          
          $retorno = $objCrudProfessor->editarProfessor($id,$nome, $email);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;
        case 'excluir':
          $id = $_POST['id'];
          $retorno = $objCrudProfessor->exluirProfessor($id);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;


        

      }
      break;
    case 'aula':
      switch($metodo){
        case 'cadastrar-aula':
          $titulo = $_POST['titulo'];
          $data = $_POST['data'];
          $hora = $_POST['hora'];
          $descricao = $_POST['descricao'];
          $link = $_POST['link'];
          $img = $_FILES["img"]["tmp_name"];
          $idCurso = $_POST['idCurso'];

            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
              $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
              $nomeImg = $_FILES[ 'img' ][ 'name' ];
          
              // Pega a extensão
              $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
          
              // Converte a extensão para minúsculo
              $extensao = strtolower ( $extensao );
              if ( strstr ( '.jpg;.jpeg;.png;.svg', $extensao ) ) {
                  // Cria um nome único para esta imagem
                  // Evita que duplique as imagens no servidor.
                  // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                  $novoNome = uniqid ( rand ()) . '.' . $extensao;
                                  
                  // Concatena a pasta com o nome
                  $destino = '../img/aulas/' . $novoNome;
                  $retorno = $objCrudAula->cadastrarAula($titulo,$data,$hora,$descricao,$link,$novoNome,$idCurso);
                  if($retorno == true){
                    // tenta mover o arquivo para o destino
                      if (!@move_uploaded_file($arquivo_tmp, $destino)){
                        echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';

                      }else{
                        echo '1';
                      }
                      

                  }

              }else{               
                echo "2"; // erro de extensao;
              } 
          // fim imagem escolhida
          }else{
              $retorno = $objCrudAula->cadastrarAula($titulo,$data,$hora,$descricao,$link,$img,$idCurso);
              if($retorno == true){
              
                echo '1';

              }else{
                echo '2';
              }
          }
          
          break;
        case 'listar':
          $idCurso = $_POST['id'];
          $objCrud = new CrudAula();
          $retornoLista = $objCrud->listarAulas($idCurso);
          foreach ($retornoLista as $obj) {
            echo'<div class="col-lg-3 col-md-12" id="aula'.$obj->getId().'">';
              echo'<div class="card">';
                echo'<div class="card-header">';
                    echo'<h3>'.$obj->getTitulo().'</h3>';
                    echo'<div class="card-header-right" >';
                        echo'<ul class="list-unstyled"  >';
                          echo'<li style="display: inline; padding-right: 10px;"><a class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar aula" onclick="editarAula('.$obj->getId().')" href="#"><i class="ik ik-edit"></i></a></li>';
                          echo'<li style="display: inline;"><a class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Excluir aula" onclick="excluirAula('.$obj->getId().')" href="#"><i class="ik ik-trash"></i></a></li>';
                        echo'</ul>';
                    echo'</div>';
                echo'</div>';
                echo'<div class="card-body timeline">';
                  echo'<div id="divImgAula'.$obj->getId().'" data-img="../img/aulas/'.$obj->getImg().'" class="header bg-theme" style="background-image: url(../img/aulas/'.$obj->getImg().')">';
                    echo'<div class="color-overlay d-flex align-items-center">';
          
                     // echo'<div class="day-number">8</div>';
                      echo'<div class="date-right">';
                        echo'<div class="day-name">Inicio das Aulas</div>';
                        echo'<div class="day-name">'.$obj->getData().'</div>';
                        echo'<div class="month">'.$obj->getHora().'</div>';
                      echo'</div>';
                    echo'</div>'; 
          
                  echo'</div>';  
                echo'</div>';
          
            echo'</div>';         
          echo'</div>';
          echo'</div>';
          
             
             
           
          }
          break;
        case 'excluir-aula':
          $idAula = $_POST['id'];
          $imgAula = $_POST['img'];
          
          $objCrudAula = new CrudAula();
          $excluirAula = $objCrudAula->excluirAula($idAula);
           
          if($excluirAula == true){
            if( file_exists( $imgAula ) ){
              unlink($imgAula);
            }
            echo "1";
          }else if($excluirAula == false){
            echo "2";
          }
          break;
        case 'editar-aula':
          $idAula = $_POST['idAula'];
          $titulo = $_POST['titulo'];
          $data = $_POST['data'];
          $hora = $_POST['hora'];
          $descricao = $_POST['descricao'];
          $link = $_POST['link'];
          $img = $_FILES["img"]["tmp_name"];
          $imgTemp = $_POST['img-temp'];
          if($img == ""){
            $objCrudAula = new CrudAula();
            $retorno2 = $objCrudAula->editarAula($idAula,$titulo,$data,$hora,$descricao,$link,$imgTemp);
            if($retorno2 == true){
              echo "1";
            }else{
              echo "2";
            }
          
          }else{

            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
                $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
                $nomeImg = $_FILES[ 'img' ][ 'name' ];
                // Pega a extensão
                $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
          
                // Converte a extensão para minúsculo
                $extensao = strtolower ( $extensao );
                if ( strstr ( '.jpg;.jpeg;.png;.svg', $extensao ) ) {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                    $novoNome = uniqid ( rand ()) . '.' . $extensao;
                    if($imgTemp == ""){
                      $imgTemp = "naotemimagem.png";
                    }  
                                    
                    // Concatena a pasta com o nome
                    $destino = '../img/aulas/' . $novoNome;
                    $remover = '../img/aulas/' . $imgTemp;
                    
                    
                    //$retorno3 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                    if( file_exists( $remover ) ){
                      unlink( $remover );
                      $retorno3 =$objCrudAula->editarAula($idAula,$titulo,$data,$hora,$descricao,$link,$novoNome);
                      if($retorno3 == true){
                          // tenta mover o arquivo para o destino
                          if (!@move_uploaded_file($arquivo_tmp, $destino)){
                              echo "3";

                          }
                          echo "1";
                          
                          
                      }else{
                          echo "2";
                      }
                    }else{
                      $retorno3 = $objCrudAula->editarAula($idAula,$titulo,$data,$hora,$descricao,$link,$novoNome);
                      if($retorno3 == true){
                          // tenta mover o arquivo para o destino
                          if (!@move_uploaded_file($arquivo_tmp, $destino)){
                              echo '3';

                          }
                          echo '1';
                          
                          
                      }else{
                          echo '2';
                      }

                    }
                    
                    
                }
              

            }

            
          }
         
          break;
          
  


      }
      break;
    case 'dashboard':
      switch($metodo){
        case 'atualizar':
          $dados = array();
          $dados[] = count($objCrudAluno->listarAlunos());
          $dados[] = count($objCrudCurso->listarCursos());
          $dados[] = count($objCrudAula->listarAula());
          $dados[] = count($objCrudProfessor->listarProfessores());
          echo implode(",", $dados);     
          break;
      }
     


}

  

?>