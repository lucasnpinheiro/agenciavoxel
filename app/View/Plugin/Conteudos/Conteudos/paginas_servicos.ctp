<?php
if (count($conteudos) > 0) {
    foreach ($conteudos as $key => $value) {
        if (count($value['ConteudosArtigo']) > 0) {
            ?>
            <div id="servico" class="row servicos">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>
                            <?php echo $value['ConteudosArtigo']['titulo']; ?>
                        </h1>
                    </div>
                </div>
                <div class="container" style="text-align: justify;">
                    <?php
                    echo '<p>' . $value['ConteudosArtigo']['conteudo'] . '</p>';
                }
                ?>
            </div>
        </div>
        <?php
        if (count($value['ConteudosMidia']) > 0) {
            foreach ($value['ConteudosMidia'] as $k_midia => $v_midia) {
                echo'<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="position: relative; overflow: auto;">' . $this->MidiaView->get($v_midia['midia_id']['Midia']['id'], array('style' => 'width: 100%; max-height: 150px; max-width: 190px;', 'link' => $v_midia['link'])) . '</div>';
            }
        }
    }
}
?>

<?php
foreach ($metas as $key => $value) {
    $this->Html->meta($key, $value, array('block' => 'meta_tag'));
}
?>