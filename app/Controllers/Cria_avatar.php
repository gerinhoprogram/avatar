<?php
/* 
Controle de Categorias
Controlador responsavel pela exibição das categorias
 */
class Cria_avatar extends Controller
{

    public function __construct()
    {
        // $this->postModel = $this->model('PostModel');
        $this->usuarioModel = $this->model('UsuarioModel');
        // $this->categoriaModel = $this->model('CategoriaModel');
    }

    public function index()
    {

        $usuario = $this->usuarioModel->lerUsuarioPorId($_SESSION['usuario_id']);

         //define os dados da view
         $dados = [
            'id' => $usuario->id,
            'avatar' => $usuario->avatar,
            'nome' => $usuario->nome,
        ];

        $this->view('avatar/index', $dados);
    }

    public function editar($id){

        if ($id != $_SESSION['usuario_id']) :
            Helper::mensagem('cria_aavatar', 'Você não tem autorização para editar esse perfil', 'alert alert-danger');
            Helper::redirecionar('posts');
        endif;

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :

            foreach ($_FILES["pictures"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
    
                    $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
                    $name = basename($_FILES["pictures"]["name"][$key]);
                    move_uploaded_file($tmp_name, "uploads/$name");
    
                }else{
                    Helper::mensagem('cria_avatar', 'Erro na imagem!', 'alert alert-danger');
                    Helper::redirecionar('cria_avatar');
                }
            }

            $dados = [
                'id' => $id,
                'avatar' => $name,
            ];

            $this->usuarioModel->atualizarAvatar($dados);
        
            Helper::mensagem('cria_avatar', 'Avatar alterado com sucesso');
            Helper::redirecionar('cria_avatar');

        endif;

       
    }
    
}
