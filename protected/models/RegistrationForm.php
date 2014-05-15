<?php

/**
 * This is the model class for table "registration_form".
 *
 * The followings are the available columns in table 'registration_form':
 * @property integer $id
 * @property string $name
 * @property string $branch
 * @property string $mobile
 * @property string $email
 * @property string $website
 * @property string $twitter_id
 * @property string $gpa
 * @property string $os
 * @property string $jquery
 * @property string $jquery_info
 * @property string $ror
 * @property string $ror_info
 * @property string $php
 * @property string $php_info
 * @property string $drupal
 * @property string $drupal_info
 * @property string $wordpress
 * @property string $word_press_info
 * @property string $file_upload
 * @property string $information
 * @property integer $question
 */
class RegistrationForm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RegistrationForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registration_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, question', 'numerical', 'integerOnly'=>true),
			array('name, email, mobile, ', 'required'),
			array('email', 'email','message'=>'Please enter a valid email address.'),
			array('file_upload', 'file', 'types'=>'pdf','allowEmpty'=>FALSE),
			array('question', 'compare','compareValue'=>7,'message'=>'Solve the simple math problem above. This is to protect against Spam BOTS.'),
			array('name, branch, mobile, email, availability_dates, website, facebook_profile_url, hitwicket_team_name, linkedin_profile_url, twitter_id, file_upload, information, role, github_url, stackoverflow_url', 'length', 'max'=>255),
			array('challenging_work, scaled_up_applications, sql_vs_nosql, liked_mobile_apps', 'safe'),
			array('role', 'requiredQuestionsForRole'),
			array('id, name, branch, mobile, email, website, twitter_id, gpa, os, jquery, jquery_info, ror, ror_info, php, php_info, drupal, drupal_info, wordpress, wordpress_info, file_upload, information, question', 'safe', 'on'=>'search'),
		);
	}
	
	public function requiredQuestionsForRole($attribute, $params) {
		if(!$this->challenging_work)
			$this->addError('challenging_work', "Please answer the question.");
		if($this->role == "TECH_LEAD") {
			if(!$this->sql_vs_nosql)
				$this->addError('sql_vs_nosql', "Please answer the question.");
			if(!$this->scaled_up_applications)
				$this->addError('scaled_up_applications', "Please answer the question.");
		} else if($this->role == "MOBILE_DEVELOPER") {
			if(!$this->liked_mobile_apps) {
				$this->addError('liked_mobile_apps', "Please answer the question.");
			}
		}
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
			'name' => 'Name',
			'branch' => 'Major',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'website' => 'Website',
			'twitter_id' => 'Twitter ID',
			'gpa' => 'CGPA',
			'os' => 'What OS do you use while coding?',
			'jquery' => 'Jquery',
			'jquery_info' => 'Specify the nature of your work with Jquery',
			'ror' => 'Ruby-on-Rails ',
			'ror_info' => 'Specify the nature of your work with Ruby-on-Rails',
			'php' => 'PHP',
			'php_info' => 'Specify the nature of your work with PHP',
			'drupal' => 'Drupal',
			'drupal_info' => 'Specify the nature of your work with Drupal',
			'wordpress' => 'Wordpress',
			'word_press_info' => 'Specify the nature of your work with Word Press',
			'file_upload' => 'Resume',
			'information' => 'This',
			'why_suitable' => 'This', 
			'past_experience' => 'This', 
			'hitwicket_experience' => 'This', 
			'match_report' => 'This', 
			'reachout_plan' => 'This',
			'question' => 'Spam Check',
			'github_url'=>'Github Profile Url',
			'stackoverflow_url'=>"Stack Overflow Profile Url"
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {

		$criteria=new CDbCriteria;
		
		$criteria->addCondition('role is not null');

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('role',$this->branch,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('stackoverflow_url',$this->website,true);
		$criteria->compare('github_url',$this->twitter_id,true);
		$criteria->compare('file_upload',$this->file_upload,true);
		$criteria->compare('information',$this->information,true);
		$criteria->compare('question',$this->question);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'id DESC',
			),
		));
	}
}