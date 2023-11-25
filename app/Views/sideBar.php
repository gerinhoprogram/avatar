


<?php if (!empty($dados['admin'])) : ?>
    <div class="sideBar">
        <?php if (!empty($dados['admin']->avatar)) : ?>
            <div class="zoom">
                <img class="avatar" src="<?= $dados['admin']->avatar ?>">
            </div>
        <?php endif ?>
        <ul class="redesSociais">
            <?php if (!empty($dados['admin']->facebook)) : ?>
                <li>
                    <a href="<?= $dados['admin']->facebook ?>" data-toggle="tooltip" title="Acompanhe no Facebook" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($dados['admin']->youtube)) : ?>
                <li>
                    <a href="<?= $dados['admin']->youtube ?>" data-toggle="tooltip" title="Inscreva-se em nosso canal do YouTube" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($dados['admin']->instagram)) : ?>
                <li>
                    <a href="<?= $dados['admin']->instagram ?>" data-toggle="tooltip" title="Me siga no Instagram" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            <?php endif ?>
        </ul>
        <h4 class="text-center"><?= $dados['admin']->nome ?></h4>
        <p><?= $dados['admin']->biografia ?></p>
    </div>
<?php endif ?>

<div class="sideBar">
    <h4>Categorias</h4>
    <ul>
        <?php foreach ($dados['categorias'] as $categoria) : ?>
            <li>
                <a href="<?= URL . '/categoria/' . $categoria->url ?>" data-toggle="tooltip" title=" <?= $categoria->titulo ?>">
                    <?= $categoria->titulo ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>