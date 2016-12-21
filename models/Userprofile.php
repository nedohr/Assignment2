<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $ID
 * @property string $First_Name
 * @property string $Last_Name
 * @property string $Gender
 * @property string $Date_Of_Birth
 * @property integer $Years_Of_Experience
 * @property string $Industry
 * @property string $Location
 * @property string $About_Me
 * @property string $Professional_Title
 * @property string $Career_Level
 * @property string $Communication_Level
 * @property string $Organizational_Level
 * @property string $Job_Level
 * @property string $Email
 * @property string $Address
 * @property integer $Phone
 * @property string $Website
 * @property string $Profile_Picture
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $file;
    
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['First_Name', 'Last_Name', 'Gender', 'Date_Of_Birth', 'Years_Of_Experience', 'Industry', 'Location', 'About_Me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Level', 'Email', 'Address', 'Phone', 'Website'], 'required'],
            ['Website', 'url'],
            [['Date_Of_Birth'], 'safe'],
            [['Years_Of_Experience', 'Phone'], 'integer'],
            [['First_Name', 'Last_Name', 'Industry', 'Location', 'About_Me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Level', 'Address', 'Website'], 'string','max' => 50],
            [['Gender'], 'string', 'max' => 6],
            [['Email'], 'string', 'max' => 200],
            [['Profile_Picture'], 'string', 'max' => 255],
            ['Email', 'email'],
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
            /*[['Profile_Picture'],'file', 'skipOnEmpty'=>true,'extensions' => 'png,gif,jpg'],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'First_Name' => 'First  Name',
            'Last_Name' => 'Last  Name',
            'Gender' => 'Gender',
            'Date_Of_Birth' => 'Date  Of  Birth',
            'Years_Of_Experience' => 'Years  Of  Experience',
            'Industry' => 'Industry',
            'Location' => 'Location',
            'About_Me' => 'About  Me',
            'Professional_Title' => 'Professional  Title',
            'Career_Level' => 'Career  Level',
            'Communication_Level' => 'Communication  Level',
            'Organizational_Level' => 'Organizational  Level',
            'Job_Level' => 'Job  Level',
            'Email' => 'Email',
            'Address' => 'Address',
            'Phone' => 'Phone',
            'Website' => 'Website',
            //'Profile_Picture' => 'Profile  Picture',
            'file' => 'Profile Picture',
        ];
    }
}
