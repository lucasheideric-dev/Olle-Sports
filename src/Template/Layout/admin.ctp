<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pontual Reparos - Administrativo</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.png" sizes="32x32">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?= $this->Html->css('admin/bootstrap/bootstrap.min.css') ?>
    <?= $this->Html->css('admin/bootstrap-icons/bootstrap-icons.css') ?>
    <?= $this->Html->css('admin/boxicons/boxicons.min.css') ?>
    <?= $this->Html->css('admin/quill/quill.snow.css') ?>
    <?= $this->Html->css('admin/quill/quill.bubble.css') ?>
    <?= $this->Html->css('admin/remixicon/remixicon.css') ?>
    <?= $this->Html->css('admin/datatable/style.css') ?>
    <?= $this->Html->css('admin/datepicker/datepicker.css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Estilo Principal -->
    <?= $this->Html->css('admin/style.css') ?>

    <!-- jQuery -->
    <?= $this->Html->script('admin/jquery.js'); ?>

    <!-- Execução dos Documento em Webroot -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<style>
    .ui-datepicker .ui-datepicker-header {
        background-color: white;
    }

    .ui-state-default {
        background-color: white !important;
        text-align: center !important;
    }

    .ui-state-highlight,
    .ui-widget-content .ui-state-highlight,
    .ui-widget-header .ui-state-highlight {
        border: 1px solid #0d6efd;
        background: #0d6efd !important;
        color: white !important;
        font-weight: 700;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    a.ui-button:active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        color: #0d6efd !important;
        border: solid 2px #0d6efd !important;
    }
</style>

<body>
    <!-- MENU SUPERIOR -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= $this->Url->build(['controller' => 'Dashboards', 'action' => 'index']) ?>" class="logo d-flex align-items-center">
                <?= $this->Html->image('logo/logo.png'); ?>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Lucas Heideric</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Lucas Heideric</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'sair']); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sair</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>

    <!-- MENU LATERAL -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/admin">
                    <i class="bi bi-house-fill"></i>
                    <span>Início</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layers-fill"></i><span>Artigos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'adicionar']) ?>">
                            <i class="bi bi-circle"></i><span>Cadastrar Artigos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'index']) ?>">
                            <i class="bi bi-circle"></i><span>Listar Artigos</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-tags-fill"></i><span>Times</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Times', 'action' => 'adicionar']) ?>">
                            <i class="bi bi-circle"></i><span>Cadastrar Times</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Times', 'action' => 'index']) ?>">
                            <i class="bi bi-circle"></i><span>Listar Times</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#categorias-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-tags-fill"></i><span>Categorias</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="categorias-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Categorias', 'action' => 'adicionar']) ?>">
                            <i class="bi bi-circle"></i><span>Cadastrar Categorias</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Categorias', 'action' => 'index']) ?>">
                            <i class="bi bi-circle"></i><span>Listar Categorias</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'sair']); ?>">
                    <i class="bi bi-door-closed-fill"></i>
                    <span>Sair</span>
                </a>
            </li>

        </ul>
    </aside>


    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer>
    </footer>

    <!-- Plugins JS -->
    <?= $this->Html->script('admin/apexcharts/apexcharts.min.js'); ?>
    <?= $this->Html->script('admin/bootstrap/bootstrap.bundle.min.js'); ?>
    <?= $this->Html->script('admin/chart/chart.umd.js'); ?>
    <?= $this->Html->script('admin/echarts/echarts.min.js'); ?>
    <?= $this->Html->script('admin/quill/quill.min.js'); ?>
    <?= $this->Html->script('admin/datatable/simple-datatables.js'); ?>
    <?= $this->Html->script('admin/tinymce/tinymce.min.js'); ?>
    <?= $this->Html->script('admin/datepicker/datepicker.js'); ?>

    <!-- Main Js -->
    <?= $this->Html->script('admin/main.js'); ?>

    <script>
        $(document).ready(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd/mm/yy', // Formato da data a ser enviada ao servidor
                changeYear: true, // Permitir selecionar o ano
                changeMonth: true, // Permitir selecionar o mês
                yearRange: '1990:2023', // Intervalo de anos disponíveis no dropdown
                dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            });

            $('.datepicker').inputmask('99/99/9999');
        });
    </script>

</body>

</html>