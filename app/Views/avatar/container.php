
    <div class="row">
        <div class="col-lg-12 border p-3">
        <?= Helper::mensagem('cria_avatar') ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="wrapper" id="htmltoimage">

                            <div class="head" id="head"></div>
                            <!-- <div class="body"></div> -->
                            <div class="chapeu">
                                <img src="public/img/acessorios/chapeu.png" class="fundo" width="120" alt="">
                            </div>
                            <div class="chapeu2">
                                <img src="public/img/acessorios/bone.png" width="120" alt="">
                            </div>
                            <div class="chapeu3">
                                <img src="public/img/acessorios/bandana.png" width="100" alt="">
                            </div>
                            <div class="chapeu4">
                                <img src="public/img/acessorios/chapeu2.png" width="140" alt="">
                            </div>
                            <div class="chapeu5">
                                <img src="public/img/acessorios/chapeu3.png" width="200" alt="">
                            </div>
                            <div class="chapeu6">
                                <img src="public/img/acessorios/chapeu4.png" width="140" alt="">
                            </div>
                            <div class="chapeu7">
                                <img src="public/img/acessorios/chapeu5.png" width="130" alt="">
                            </div>
                            <div class="chapeu8">
                                <img src="public/img/acessorios/cabelo.png" width="160" alt="">
                            </div>
                            <div class="chapeu9">
                                <img src="public/img/acessorios/cabelo2.png" width="170" alt="">
                            </div>
                            <div class="chapeu10">
                                <img src="public/img/acessorios/chapeu6.png" width="140" alt="">
                            </div>

                            <div class="glasses">
                                <img src="public/img/acessorios/oculos.png" width="100" alt="">
                            </div>
                            <div class="glasses2">
                                <img src="public/img/acessorios/oculos2.png" width="100" alt="">
                            </div>
                            <div class="glasses3">
                                <img src="public/img/acessorios/oculos3.png" width="100" alt="">
                            </div>
                            <div class="glasses4">
                                <img src="public/img/acessorios/oculos4.png" width="100" alt="">
                            </div>

                            <div class="glasses5">
                                <img src="public/img/acessorios/olhos.png" width="100" alt="">
                            </div>

                            <div class="glasses6">
                                <img src="public/img/acessorios/olhos2.png" width="100" alt="">
                            </div>

                            <div class="glasses7">
                                <img src="public/img/acessorios/olhos3.png" width="100" alt="">
                            </div>
                            <div class="glasses8">
                                <img src="public/img/acessorios/olhos4.png" width="100" alt="">
                            </div>
                            <div class="glasses9">
                                <img src="public/img/acessorios/olhos5.png" width="100" alt="">
                            </div>

                            <div class="glasses10">
                                <img src="public/img/acessorios/olhos6.png" width="100" alt="">
                            </div>

                            <div class="nariz">
                                <img src="public/img/acessorios/nariz.png" width="100" alt="">
                            </div>
                            <div class="nariz2">
                                <img src="public/img/acessorios/nariz2.png" width="80" alt="">
                            </div>


                            <div class="tie">
                                <img src="public/img/acessorios/gravata.png" width="90" alt="">
                            </div>
                            <div class="tie2">
                                <img src="public/img/acessorios/gravata2.png" width="110" alt="">
                            </div>

                            <div class="boca">
                                <img src="public/img/acessorios/boca.png" width="80" alt="">
                            </div>
                            <div class="boca2">
                                <img src="public/img/acessorios/boca2.png" width="80" alt="">
                            </div>
                            <div class="boca3">
                                <img src="public/img/acessorios/boca3.png" width="80" alt="">
                            </div>
                            <div class="boca4">
                                <img src="public/img/acessorios/boca4.png" width="80" alt="">
                            </div>
                            <div class="boca5">
                                <img src="public/img/acessorios/boca5.png" width="80" alt="">
                            </div>
                            <div class="boca6">
                                <img src="public/img/acessorios/barba.png" width="80" alt="">
                            </div>
                            <div class="boca7">
                                <img src="public/img/acessorios/barba2.png" width="80" alt="">
                            </div>
                            <div class="boca8">
                                <img src="public/img/acessorios/boca6.png" width="70" alt="">
                            </div>
                            <div class="boca9">
                                <img src="public/img/acessorios/boca7.png" width="70" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-success mb-2" onclick="downloadimage()">Download</button>
                        <div class="form-group">
                        <label for="cor_cabeca">Trocar cor do corpo</label>
                        <input class="form-control mb-2" type="color" id="cor_cabeca" onchange="troca_cor_cabeca();">
                        </div>
                        <div class="form-group">
                        <label for="cor_fundo">Trocar cor do fundo</label>
                        <input class="form-control mb-2" type="color" id="cor_fundo" onchange="troca_cor_fundo();">
                        </div>

                    </div>
                    <div class="col-lg-3 controls">
                        <input type="checkbox" id="nariz">
                        <label class="control" for="nariz"> 
                                <img src="public/img/acessorios/nariz.png" width="50" alt="">
                        </label>
                        <input type="checkbox" id="nariz2">
                        <label class="control" for="nariz2"> 
                                <img src="public/img/acessorios/nariz2.png" width="50" alt="">
                        </label>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

            </div>

            <div class="row controls mt-4">
                <div class="col-lg-3">

                    <input type="checkbox" id="eyeglasses">
                    <label class="control" for="eyeglasses"> 
                            <img src="public/img/acessorios/oculos.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses2">
                    <label class="control" for="eyeglasses2">  
                            <img src="public/img/acessorios/oculos2.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses3">
                    <label class="control" for="eyeglasses3">  
                            <img src="public/img/acessorios/oculos3.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses4">
                    <label class="control" for="eyeglasses4">  
                            <img src="public/img/acessorios/oculos4.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses8">
                    <label class="control" for="eyeglasses8">  
                            <img src="public/img/acessorios/olhos4.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses5">
                    <label class="control" for="eyeglasses5">  
                            <img src="public/img/acessorios/olhos.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses9">
                    <label class="control" for="eyeglasses9">  
                            <img src="public/img/acessorios/olhos5.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses10">
                    <label class="control" for="eyeglasses10">  
                            <img src="public/img/acessorios/olhos6.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses6">
                    <label class="control" for="eyeglasses6">  
                            <img src="public/img/acessorios/olhos2.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="eyeglasses7">
                    <label class="control" for="eyeglasses7">  
                            <img src="public/img/acessorios/olhos3.png" width="50" alt="">
                    </label>

                </div>
                <div class="col-lg-3">
                    <input type="checkbox" id="boca">
                    <label data-text="Boca" class="control" for="boca">  
                                <img src="public/img/acessorios/boca.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="boca2">
                    <label data-text="Boca2" class="control" for="boca2">  
                                <img src="public/img/acessorios/boca2.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="boca3">
                    <label data-text="Boca3" class="control" for="boca3">    
                                <img src="public/img/acessorios/boca3.png" width="50" alt=""> 
                    </label>

                    <input type="checkbox" id="boca4">
                    <label data-text="Boca3" class="control" for="boca4">    
                                <img src="public/img/acessorios/boca4.png" width="50" alt=""> 
                    </label>

                    <input type="checkbox" id="boca6">
                    <label data-text="Boca3" class="control" for="boca6">    
                                <img src="public/img/acessorios/barba.png" width="30" alt=""> 
                    </label>

                    <input type="checkbox" id="boca7">
                    <label data-text="Boca3" class="control" for="boca7">    
                                <img src="public/img/acessorios/barba2.png" width="30" alt=""> 
                    </label>

                    <input type="checkbox" id="boca5">
                    <label data-text="Boca3" class="control" for="boca5">    
                                <img src="public/img/acessorios/boca5.png" width="50" alt=""> 
                    </label>

                    <input type="checkbox" id="boca8">
                    <label data-text="Boca3" class="control" for="boca8">    
                                <img src="public/img/acessorios/boca6.png" width="50" alt=""> 
                    </label>

                    <input type="checkbox" id="boca9">
                    <label data-text="Boca3" class="control" for="boca9">    
                                <img src="public/img/acessorios/boca7.png" width="50" alt=""> 
                    </label>
                </div>
                <div class="col-lg-3">
                    <input type="checkbox" id="tie">
                    <label data-text="Tie" class="control" for="tie">  
                       
                            <img src="public/img/acessorios/gravata.png" width="50" alt="">
                      
                    </label>

                    <input type="checkbox" id="tie2">
                    <label data-text="Tie" class="control" for="tie2">  
                       
                            <img src="public/img/acessorios/gravata2.png" width="50" alt="">
                        
                    </label>
                </div>
                <div class="col-lg-3">

                    <input type="checkbox" id="chapeu">
                    <label data-text="Chapeu" class="control" for="chapeu">  
                            <img src="public/img/acessorios/chapeu.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="chapeu2">
                    <label data-text="Chapeu" class="control" for="chapeu2">  
                            <img src="public/img/acessorios/bone.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="chapeu3">
                    <label data-text="Chapeu" class="control" for="chapeu3">  
                          <img src="public/img/acessorios/bandana.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="chapeu4">
                    <label data-text="Chapeu" class="control" for="chapeu4">  
                          <img src="public/img/acessorios/chapeu2.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="chapeu5">
                    <label data-text="Chapeu" class="control" for="chapeu5">  
                          <img src="public/img/acessorios/chapeu3.png" width="50" alt="">
                    </label>

                    <input type="checkbox" id="chapeu6">
                    <label data-text="Chapeu" class="control" for="chapeu6">  
                          <img src="public/img/acessorios/chapeu4.png" width="50" alt="">
                    </label>
                    <input type="checkbox" id="chapeu7">
                    <label data-text="Chapeu" class="control" for="chapeu7">  
                          <img src="public/img/acessorios/chapeu5.png" width="50" alt="">
                    </label>
                    <input type="checkbox" id="chapeu8">
                    <label data-text="Chapeu" class="control" for="chapeu8">  
                          <img src="public/img/acessorios/cabelo.png" width="50" alt="">
                    </label>
                    <input type="checkbox" id="chapeu9">
                    <label data-text="Chapeu" class="control" for="chapeu9">  
                          <img src="public/img/acessorios/cabelo2.png" width="50" alt="">
                    </label>
                    <input type="checkbox" id="chapeu10">
                    <label data-text="Chapeu" class="control" for="chapeu10">  
                          <img src="public/img/acessorios/chapeu6.png" width="50" alt="">
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <form enctype="multipart/form-data" action="<?= URL ?>/cria_avatar/editar/<?= $dados['id'] ?>" method="post">
                        <div class="form-group">
                            <label for="avatar">Mude aqui seu avatar:</label>
                            <input type="file" name="pictures[]" required id="avatar" class="form-control">
                            <input type="hidden" required readonly value="<?php echo $_SESSION['usuario_id'] ?>" name="id">
                            
                        </div>
                        <input type="submit" value="Atualizar" data-toggle="tooltip" title="Atualizar avatar" class="btn fundoSecundario btn-block">

                    </form>
                </div>
            </div>


        </div>
    </div>
