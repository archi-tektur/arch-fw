<?php

namespace Examples\Controller;

use ArchAPI\Controller\Authorizator as Auth;

class Authenticator extends Auth
{
   public function _getUserList()
   {
       return ['us'=>'pw'];
   }
}