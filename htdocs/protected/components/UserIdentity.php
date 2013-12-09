<?php

class UserIdentity extends CUserIdentity {

    public $_id;
    const ERROR_USER_NOT_ACTIVATED=3;

	public function authenticate() {
        $user = User::model()->findByAttributes(array('email'=>$this->username));

        if ($user===null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if(md5($this->password) !== $user->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else if(!$user->is_activated)
            $this->errorCode=self::ERROR_USER_NOT_ACTIVATED;
        else {
            $this->_id = $user->id;
            $this->errorCode = self::ERROR_NONE;
            $this->setState("_id", $user->id);
            $this->setState('roles',$user->role);
         }
        return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
    

}
