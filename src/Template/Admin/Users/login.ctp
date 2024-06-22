<?php $this->layout = false; ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Estilo CSS -->
    <?= $this->Html->css('plugins.css') ?>
    <?= $this->Html->css('search.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('cookies.css') ?>

    <!-- jQuery -->
    <?= $this->Html->script('admin/jquery.js'); ?>

    <!-- Vendors -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.png" sizes="32x32">

    <title>Ollé Sports - Admin</title>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Ollé Sports</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login Ollé Sports</h5>
                                        <p class="text-center small">Preencha os campos abaixo</p>
                                    </div>

                                    <?= $this->Form->create(NULL, ['class' => 'row g-3']) ?>
                                    <div class="col-12">
                                        <?= $this->Form->control('username', ['class' => 'form-control', 'label' => 'Usuario', 'type' => 'text']); ?>
                                    </div>

                                    <div class="col-12">
                                        <?= $this->Form->control('password', ['class' => 'form-control', 'label' => 'Senha']); ?>
                                    </div>

                                    <div class="col-12">
                                        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary w-100']) ?>
                                    </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <!-- Scripts -->
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('core.min.js') ?>
    <?= $this->Html->script('search.js') ?>
    <?= $this->Html->script('main.js') ?>
    <?= $this->Html->script('pluginsqu.js') ?>
    <?= $this->Html->script('scriptsqu.js') ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>