<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rap_list', 'rap'], 'integer'],
            [['ref', 'shape', 'color', 'clarity', 'cut', 'pol', 'symm', 'fluo', 'cert', 'details'], 'safe'],
            [['weight', 'price_crt'], 'number'],
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'weight' => $this->weight,
            'rap_list' => $this->rap_list,
            'rap' => $this->rap,
            'price_crt' => $this->price_crt,
        ]);

        $query->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'shape', $this->shape])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'clarity', $this->clarity])
            ->andFilterWhere(['like', 'cut', $this->cut])
            ->andFilterWhere(['like', 'pol', $this->pol])
            ->andFilterWhere(['like', 'symm', $this->symm])
            ->andFilterWhere(['like', 'fluo', $this->fluo])
            ->andFilterWhere(['like', 'cert', $this->cert])
            ->andFilterWhere(['like', 'details', $this->details]);

        return $dataProvider;
    }
}
