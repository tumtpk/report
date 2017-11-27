<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bandonkri;

/**
 * SearchBandonkri represents the model behind the search form about `backend\models\Bandonkri`.
 */
class SearchBandonkri extends Bandonkri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'o1', 'o2', 'o3', 'o4', 'o5', 'o6', 'o7', 'o8', 'o9', 'o10', 'o11', 'o12', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10'], 'integer'],
            [['a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'a13', 'a14', 'a15', 'a16', 'a17', 'a18', 'a19', 'a20', 'a21', 'a22', 'a23', 'a24', 'a25', 'a26', 'a27', 'a28', 'r'], 'safe'],
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
        $query = Bandonkri::find();

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
            'id' => $this->id,
            'o1' => $this->o1,
            'o2' => $this->o2,
            'o3' => $this->o3,
            'o4' => $this->o4,
            'o5' => $this->o5,
            'o6' => $this->o6,
            'o7' => $this->o7,
            'o8' => $this->o8,
            'o9' => $this->o9,
            'o10' => $this->o10,
            'o11' => $this->o11,
            'o12' => $this->o12,
            'd1' => $this->d1,
            'd2' => $this->d2,
            'd3' => $this->d3,
            'd4' => $this->d4,
            'd5' => $this->d5,
            'd6' => $this->d6,
            'd7' => $this->d7,
            'd8' => $this->d8,
            'd9' => $this->d9,
            'd10' => $this->d10,
        ]);

        $query->andFilterWhere(['like', 'a1', $this->a1])
            ->andFilterWhere(['like', 'a2', $this->a2])
            ->andFilterWhere(['like', 'a3', $this->a3])
            ->andFilterWhere(['like', 'a4', $this->a4])
            ->andFilterWhere(['like', 'a5', $this->a5])
            ->andFilterWhere(['like', 'a6', $this->a6])
            ->andFilterWhere(['like', 'a7', $this->a7])
            ->andFilterWhere(['like', 'a8', $this->a8])
            ->andFilterWhere(['like', 'a9', $this->a9])
            ->andFilterWhere(['like', 'a10', $this->a10])
            ->andFilterWhere(['like', 'a11', $this->a11])
            ->andFilterWhere(['like', 'a12', $this->a12])
            ->andFilterWhere(['like', 'a13', $this->a13])
            ->andFilterWhere(['like', 'a14', $this->a14])
            ->andFilterWhere(['like', 'a15', $this->a15])
            ->andFilterWhere(['like', 'a16', $this->a16])
            ->andFilterWhere(['like', 'a17', $this->a17])
            ->andFilterWhere(['like', 'a18', $this->a18])
            ->andFilterWhere(['like', 'a19', $this->a19])
            ->andFilterWhere(['like', 'a20', $this->a20])
            ->andFilterWhere(['like', 'a21', $this->a21])
            ->andFilterWhere(['like', 'a22', $this->a22])
            ->andFilterWhere(['like', 'a23', $this->a23])
            ->andFilterWhere(['like', 'a24', $this->a24])
            ->andFilterWhere(['like', 'a25', $this->a25])
            ->andFilterWhere(['like', 'a26', $this->a26])
            ->andFilterWhere(['like', 'a27', $this->a27])
            ->andFilterWhere(['like', 'a28', $this->a28])
            ->andFilterWhere(['like', 'r', $this->r]);

        return $dataProvider;
    }
}
