<?php

//require_once(realpath(MODEL_PATH . '/User.php'));


class Login extends Model
{
    public function checklogin(){
         $user = User::getOne(['email' => $this->email]);
         if($user){
             if($user->end_date){
                throw new AppException('Usuario está desligado da empresa');
             }
             if(password_verify($this->password, $user->password)){
                 return $user;
             }
         }
         throw new AppException('usuario/Senha invalidos');
    }
}
