<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userprofile;

/**
 * UserprofileSearch represents the model behind the search form about `app\models\Userprofile`.
 */
class UserprofileSearch extends Userprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Years_Of_Experience', 'Phone'], 'integer'],
            [['First_Name', 'Last_Name', 'Gender', 'Date_Of_Birth', 'Industry', 'Location', 'About_Me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Level', 'Email', 'Address', 'Website', 'Profile_Picture'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Userprofile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'Date_Of_Birth' => $this->Date_Of_Birth,
            'Years_Of_Experience' => $this->Years_Of_Experience,
            'Phone' => $this->Phone,
        ]);

        $query->andFilterWhere(['like', 'First_Name', $this->First_Name])
            ->andFilterWhere(['like', 'Last_Name', $this->Last_Name])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Industry', $this->Industry])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'About_Me', $this->About_Me])
            ->andFilterWhere(['like', 'Professional_Title', $this->Professional_Title])
            ->andFilterWhere(['like', 'Career_Level', $this->Career_Level])
            ->andFilterWhere(['like', 'Communication_Level', $this->Communication_Level])
            ->andFilterWhere(['like', 'Organizational_Level', $this->Organizational_Level])
            ->andFilterWhere(['like', 'Job_Level', $this->Job_Level])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Website', $this->Website])
            ->andFilterWhere(['like', 'Profile_Picture', $this->Profile_Picture]);

        return $dataProvider;
    }
}
