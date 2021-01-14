<?php
    namespace App;
    use MF\Init\Bootstrap;
    class Route extends Bootstrap {
       
        //ROTAS QUE O USUÁRIO POSSUE
        public function initRoutes() {
            // UMA ROTA PARA CADA PATH 
            # Rotas do index
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index' // Métodos que estarão no controlador
            );
            $routes['recursos'] = array(
                'route' => '/recursos',
                'controller' => 'IndexController',
                'action' => 'recursos' // Métodos que estarão no controlador
            );
            
            $routes['inscreverse'] = array(
                'route' => '/inscreverse',
                'controller' => 'IndexController',
                'action' => 'inscreverse' // Métodos que estarão no controlador
            );
            $routes['registrar'] = array(
                'route' => '/registrar',
                'controller' => 'IndexController',
                'action' => 'registrar' 
            );
            $routes['mutirao'] = array(
                'route' => '/mutirao',
                'controller' => 'IndexController',
                'action' => 'mutirao' 
            );
            $routes['sobreNos'] = array(
                'route' => '/sobreNos',
                'controller' => 'IndexController',
                'action' => 'sobreNos' 
            );
            $routes['timeline'] = array(
                'route' => '/timeline',
                'controller' => 'AppController',
                'action' => 'timeline' // Métodos que estarão no controlador
            );
            $routes['autenticar'] = array(
                'route' => '/autenticar',
                'controller' => 'AuthController',
                'action' => 'autenticar' // Métodos que estarão no controlador
            );

            $routes['acessorestrito'] = array(
                'route' => '/acessorestrito',
                'controller' => 'AppController',
                'action' => 'acessorestrito' // Métodos que estarão no controlador
            );
            $routes['sair'] = array(
                'route' => '/sair',
                'controller' => 'AuthController',
                'action' => 'sair'
            );

            //Setando o valor do atributo Router
            $this->setRoutes($routes);


        }
        
    }

?>