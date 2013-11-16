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
			array('name, email, mobile, question, college, availability_dates, past_experience, hitwicket_experience, reachout_plan, hitwicket_team_name, hiwicket_user_engagement_strategy', 'required'),
			array('email', 'email','message'=>'Please enter a valid email address.'),
			array('file_upload', 'file', 'types'=>'pdf','allowEmpty'=>FALSE),
			array('question', 'compare','compareValue'=>7,'message'=>'Solve the simple math problem above. This is to protect against Spam BOTS.'),
			array('name, branch, mobile, email, availability_dates, website, facebook_profile_url, hitwicket_team_name, linkedin_profile_url, twitter_id, file_upload, information', 'length', 'max'=>255),
			
			array('id, name, branch, mobile, email, website, twitter_id, gpa, os, jquery, jquery_info, ror, ror_info, php, php_info, drupal, drupal_info, wordpress, wordpress_info, file_upload, information, question', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('twitter_id',$this->twitter_id,true);
		$criteria->compare('file_upload',$this->file_upload,true);
		$criteria->compare('information',$this->information,true);
		$criteria->compare('question',$this->question);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}