<?php

function loginAction()
    {
        $name = $this->request->get('nombre');
        $lastName = $this->request->get('apellido');
        $direccion = $this->request->get('direccion');
        $email = $this->request->get('email');
        $phone = $this->request->get('telefono');
        
        $this->loadModel('cliente');
        if ($this->users->validate($name, $lastName))
        {
            $userData = $this->users->fetch($name);
            AuthStorage::save($username, $userData);
            $this->redirect('secret_area');
        }
        else
        {
            $this->view->message = 'Invalid login';
            $this->view->render('error');
        }
    }

    function logoutAction()
    {
        if (AuthStorage::logged())
        {
            AuthStorage::remove();
            $this->redirect('index');
        }
        else
        {
            $this->view->message = 'You are not logged in.';
            $this->view->render('error');
        }
    }
