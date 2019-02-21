<?php
   
   function validateregister(){
       $error='';
        try{
            //echo('create1');
            $DAOlogin = new DAOlogin();
            $check = $DAOlogin->validate();
            //var_dump($check);
            //die();
        }catch (Exception $e){
            //print_r($rdo);
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }

        if ($check != false){
            $error='ERROR: Este email ya está registrado';
        }
       
        return $check;
   }
        