<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="<?php echo Configure::read('Config.Titulo'); ?>">
        <meta name="keywords" content="<?php echo Configure::read('Config.Titulo'); ?>">
        <meta name="author" content="<?php echo Configure::read('Config.Titulo'); ?>">
        <title><?php echo Configure::read('Config.Titulo'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $this->Html->css('/css/bootstrap.min.css'); ?>
        <?php echo $this->Html->css('/css/font-awesome.min.css'); ?>
        <?php echo $this->Html->css('/css/agenciavoxel.css'); ?>
        <?php echo $this->fetch('meta_tag'); ?>
    </head>
    <body>
        <div class="row topo">
            <div class="container">
                <div class="col-xs-7 col-md-4 logotopo">
                    <?php echo $this->Html->link($this->Html->image('/img/logo.png'), '/', array('escape' => FALSE)); ?>
                </div>
                <div class="col-xs-1 col-md-4"></div>
                <div class="col-xs-4 col-md-4 socialtopo">
                    <section id="container" class="visible-md visible-lg">
                        <!-- Style 2 -->
                        <div id="menu-wrap">
                            <?php if (Configure::read('Social.LinkFacebook') != '') {
                                ?>
                                <div class="menu-item">
                                    <span id="active" class="icon fa fa-facebook"></span>
                                    <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkFacebook'); ?>"><i class="fa fa-facebook"></i></a>
                                </div><!-- Menu Item -->
                            <?php }
                            ?>
                            <?php if (Configure::read('Social.LinkTwitter') != '') {
                                ?>
                                <div class="menu-item">
                                    <span id="active" class="icon fa fa-twitter"></span>
                                    <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkTwitter'); ?>"><i class="fa fa-twitter"></i></a>
                                </div><!-- Menu Item -->
                            <?php }
                            ?>
                            <?php if (Configure::read('Social.LinkPinterest') != '') {
                                ?>
                                <div class="menu-item">
                                    <span id="active" class="icon fa fa-pinterest"></span>
                                    <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkPinterest'); ?>"><i class="fa fa-pinterest"></i></a>
                                </div><!-- Menu Item -->
                            <?php }
                            ?>
                            <?php if (Configure::read('Social.LinkGooglePlus') != '') {
                                ?>
                                <div class="menu-item">
                                    <span id="active" class="icon fa fa-google-plus"></span>
                                    <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkGooglePlus'); ?>"><i class="fa fa-google-plus"></i></a>
                                </div><!-- Menu Item -->
                            <?php }
                            ?>
                            <div class="menu-item">
                                <span id="active" class="icon fa fa-rss"></span>
                                <a id="hover" class="text" target="_blank" href="<?php echo $this->Html->url('/rss.xml'); ?>"><i class="fa fa-rss"></i></a>
                            </div><!-- Menu Item -->

                        </div><!-- Menu Wrap -->
                    </section>
                </div>
                <div class="clearfix"></div>
                <?php
                if ($this->request->url == FALSE) {
                    ?>
                    <div class="row menutopo">
                        <div id="empresaBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-globe"></i>
                            <div class="row">
                                Empresa
                            </div>
                        </div>
                        <div id="servicoBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-cogs"></i>
                            <div class="row">
                                Serviços
                            </div>
                        </div>
                        <div id="casesBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-file-text-o"></i>
                            <div class="row">
                                Cases
                            </div>
                        </div>
                        <div id="clientesBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-folder-open-o"></i>
                            <div class="row">
                                Clientes
                            </div>
                        </div>
                        <div id="blogBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-comments"></i>
                            <div class="row">
                                Blog
                            </div>
                        </div>
                        <div id="contatoBtn" class="col-xs-2 col-md-2 itemmenu">
                            <i class="fa fa-phone"></i>
                            <div class="row">
                                Contato
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="row menutopo">
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-globe"></i> <div class="row"> Empresa </div>', '/#empresa', array('escape' => FALSE)) ?>
                        </div>
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-cogs"></i> <div class="row"> Serviços </div>', '/#servico', array('escape' => FALSE)) ?>
                        </div>
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-file-text-o"></i> <div class="row"> Cases </div>', '/#cases', array('escape' => FALSE)) ?>
                        </div>
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-folder-open-o"></i> <div class="row"> Clientes </div>', '/#clientes', array('escape' => FALSE)) ?>
                        </div>
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-comments"></i> <div class="row"> Blog </div>', '/#blog', array('escape' => FALSE)) ?>
                        </div>
                        <div id="" class="col-xs-2 col-md-2 itemmenu">
                            <?php echo $this->Html->link('<i class="fa fa-phone"></i> <div class="row"> Contato </div>', '/#contato', array('escape' => FALSE)) ?>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
        </div>
        <div class="row banner">
            <div class="col-xs-12 col-md-12">

                <div id="carousel-banners" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-banners" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-banners" data-slide-to="1"></li>
                        <li data-target="#carousel-banners" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <?php echo $this->Html->image('/img/banner.png'); ?>
                        </div>
                        <div class="item">
                            <?php echo $this->Html->image('/img/banner1.png'); ?>
                        </div>
                        <div class="item">
                            <?php echo $this->Html->image('/img/banner2.png'); ?>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-banners" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-banners" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
        <?php echo $this->fetch('content'); ?>


        <div class="row rodape">
            <div class="container">
                <div class="col-xs-12 col-md-4 rodape-esquerdo">
                    <div class="row logorodape">
                        <?php echo $this->Html->image('/img/logo_rodape.png'); ?>
                    </div>
                    <div class="row direitos">
                        Todos os direitos reservados - Agência Voxel
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                </div>
                <div class="col-xs-12 col-md-3 rodape-direito">
                    <div class="row menu-rodape">
                        <div class="col-xs-3 col-md-4">
                            <?php echo $this->Html->link('Infraestrutura', '/infraestrutura'); ?>
                        </div>
                        <div class="col-xs-3 col-md-4">
                            <?php echo $this->Html->link('Serviços', '/servicos'); ?>
                        </div>
                        <div class="col-xs-3 col-md-4">
                            <?php echo $this->Html->link('Políticas', '/politicas'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <section id="container">
                            <!-- Style 2 -->
                            <div id="menu-wrap">
                                <?php if (Configure::read('Social.LinkFacebook') != '') {
                                    ?>
                                    <div class="menu-item">
                                        <span id="active" class="icon fa fa-facebook"></span>
                                        <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkFacebook'); ?>"><i class="fa fa-facebook"></i></a>
                                    </div><!-- Menu Item -->
                                <?php }
                                ?>
                                <?php if (Configure::read('Social.LinkTwitter') != '') {
                                    ?>
                                    <div class="menu-item">
                                        <span id="active" class="icon fa fa-twitter"></span>
                                        <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkTwitter'); ?>"><i class="fa fa-twitter"></i></a>
                                    </div><!-- Menu Item -->
                                <?php }
                                ?>
                                <?php if (Configure::read('Social.LinkPinterest') != '') {
                                    ?>
                                    <div class="menu-item">
                                        <span id="active" class="icon fa fa-pinterest"></span>
                                        <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkPinterest'); ?>"><i class="fa fa-pinterest"></i></a>
                                    </div><!-- Menu Item -->
                                <?php }
                                ?>
                                <?php if (Configure::read('Social.LinkGooglePlus') != '') {
                                    ?>
                                    <div class="menu-item">
                                        <span id="active" class="icon fa fa-google-plus"></span>
                                        <a id="hover" class="text" target="_blank" href="<?php echo Configure::read('Social.LinkGooglePlus'); ?>"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- Menu Item -->
                                <?php }
                                ?>
                                <div class="menu-item">
                                    <span id="active" class="icon fa fa-rss"></span>
                                    <a id="hover" class="text" target="_blank" href="<?php echo $this->Html->url('/rss.xml'); ?>"><i class="fa fa-rss"></i></a>
                                </div><!-- Menu Item -->

                            </div><!-- Menu Wrap -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->Html->script('/js/jquery-2.1.0.min.js'); ?>
        <?php echo $this->Html->script('/js/bootstrap.min.js'); ?>
        <?php echo $this->Html->script('/js/scrolld.min.js'); ?>
        <?php echo $this->fetch('css'); ?>
        <?php echo $this->fetch('script'); ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.carousel').carousel();
                $("[id*='Btn']").stop(true).on('click', function(e) {
                    e.preventDefault();
                    $(this).scrolld();
                });
            });
        </script>        
    </body>
</html>

