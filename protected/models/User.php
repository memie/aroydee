<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $type_id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $login_date
 * @property string $email
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' username, password,repassword,email','required','on'=>'register'),
			array('type_id, name, username, password', 'length', 'max'=>45),
			//��Ǩ�ͺ username, password  ��� pattern �ͧ�Ѻ�� a-z �����������;�����˭���е���Ţ��ҹ��
			array('username, password', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => '�����ŵ�ͧ�繵���ѡ�����͵���Ţ��ҹ��','on' => 'register'),
			//��Ǩ�ͺ��ҡ�͡ password �ç�ѹ����ͧ��ͧ���ͻ���
			array('repassword', 'compare', 'compareAttribute' => 'password','on' => 'register'),
			//��Ǩ�ͺ��ë�Ӣͧ Username �Ѻ Email
			array('username,email', 'unique', 'className' => 'User', 'message' => '{attribute} "{value}" ��������к�����','on' => 'register'),
				
			//��Ǩ�ͺ�ٻ��Шӵ���ͧ�Ѻ��� jpg gif png ��Т�Ҵ�������Թ 1MB (1024*1024) ��Ш���������������ٻ��Шӵ�ǡ��� (allowEmpty=>true)
			array('user_pic', 'file', 'types' => 'jpg, gif, png', 'maxSize' => 1024 * 1024, 'tooLarge' => '��Ҵ����Թ1MB', 'allowEmpty' => true),
				
			array('password', 'length', 'max'=>15,'min'=>5),	
			array('email', 'length', 'max'=>145),
			array('email', 'email'),
			array('login_date,password,repassword', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type_id,name, username, password,repassword, login_date, email', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type_id' => 'Type',
			'username' => 'Username',
			'password' => 'Password',
			'repassword' => 'Repassword',
			'login_date' => 'Login Date',
			'email' => 'Email',
			'name' => 'Name',
			'user_pic' => 'User_Pic',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('login_date',$this->login_date,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('user_pic',$this->user_pic,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
