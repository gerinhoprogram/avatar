<div class="container my-5">

    <?= Helper::mensagem('usuario') ?>
    <div class="row">
        <div class="col-md-4">

            <div class="sideBar">
                <div class="zoom">
                    <?php if (!empty($dados['avatar'])) : ?>
                        <img class="avatar" src="<?=URL?>/public/uploads/<?= $dados['avatar'] ?>">
                    <?php else: ?>
                        <img class="avatar" src="https://via.placeholder.com/150">
                    <?php endif ?>
                </div>
                <h4 class="text-center"><?= $dados['nome'] ?></h4>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fundoPrimario">
                    Dados Pessoais
                </div>
                <div class="card-body">
                    <form name="atualizar" method="POST" enctype="multipart/form-data" action="<?= URL ?>/usuario/perfil/<?= $dados['id'] ?>">

                        <div class="form-group">
                            <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                            <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['nome_erro'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                            <input type="text" name="email" id="email" value="<?= $dados['email'] ?>" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['email_erro'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['senha_erro'] ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="biografia">Biografia:</label>
                            <textarea name="biografia" id="biografia" class="form-control" rows="3"><?= $dados['biografia'] ?></textarea>
                        </div>
                        
                        <input type="submit" value="Atualizar" data-toggle="tooltip" title="Atualizar Dados do Perfil" class="btn fundoSecundario btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>