<?php
    namespace App\Controllers ;
    // Os recurso do miniframework
    use MF\Controller\Action ;
    use MF\Model\Conteiner;

    class AuthController extends Action{

        public function autenticar(){
            $usuario = Conteiner::getModel('Usuario');

            $usuario->__set('nome_usuario', $_POST['login']);
            $usuario->__set('senha_usuario', md5($_POST['senha']));

            $usuario->autenticar();

            if($usuario->__get('id') != '' && $usuario->__get('nome_usuario') != ''){
                session_start();
                $_SESSION['id'] = $usuario->__get('id');
                $_SESSION['nome'] = $usuario->__get('nome_usuario');

                header('Location: /timeline');
            }
            else{
                header('location: /?login=erro');
            }

        }
    }


?>