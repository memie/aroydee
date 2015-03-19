<?php

class WebUser extends CWebUser {
	private $_model;

			function isMember(){
				$user = $this->loadUser(Yii::app()->user->id);
				if( $user->type_id==3)
					return  $user->type_id;
				else
				
					return null ;
				
			}
			function isAdmin(){
			$user = $this->loadUser(Yii::app()->user->id);
			if( $user->type_id==4)
				return  $user->type_id;
			else 
				
			return null ;
			}

			

	protected function loadUser($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null):
			$this->_model=User::model()->findByPk($id);
			endif;
		}
		return $this->_model;
	}
	
	}
	?>