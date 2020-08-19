<?php 
$paginaLink = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="../pages/index.php">
                            <div class="logo-img">
                               <img src="../src/img/logo-berlimDigital.svg" height="40px" class="header-brand-img" alt="logo"> 
                            </div>
                            <span class="text">Berlim Digital</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div <?php if($paginaLink == "index.php") {echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
                                    <a href=" ../pages/index.php"><i class="ik ik-bar-chart-2"></i><span>Painel de Controle</span></a>
                                </div>
                                <div <?php if($paginaLink == "professores.php") {echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
                                    <a href="../pages/professores.php"><i class="ik ik-user"></i><span>Professores</span></a>
                                </div>
                                <!--
                                <div>
                                    <a href="../pages/alunos.php"><i class="ik ik-users"></i><span>Alunos</span></a>
                                </div>-->
                                <div <?php if($paginaLink == "curso.php") {echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
                                    <a href="../pages/curso.php"><i class="ik ik-clipboard"></i><span>Cursos</span></a>
                                </div>
                                <div class="nav-item" >
                                    <a href="../src/php/logout.php"><i class="ik ik-log-out"></i><span>Sair</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
