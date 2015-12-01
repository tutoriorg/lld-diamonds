<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProductOrder;

/**
 * ProductOrderSearch represents the model behind the search form about `backend\models\ProductOrder`.
 */
class ProductOrderSearch extends ProductOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'order_lld_id'], 'integer'],
            [['name', 'shape', 'color', 'clarity', 'lab', 'cert', 'sym', 'flour', 'cut', 'remark', 'culet', 'girdle'], 'safe'],
            [['langth', 'weight', 'height', 'depth', 'table_lld', 'polish', 'cost_parcent', 'cost', 'rap_parcent', 'sale_prise'], 'number'],
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
        $query = ProductOrder::find();

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
            'product_id' => $this->product_id,
            'order_lld_id' => $this->order_lld_id,
            'langth' => $this->langth,
            'weight' => $this->weight,
            'height' => $this->height,
            'depth' => $this->depth,
            'table_lld' => $this->table_lld,
            'polish' => $this->polish,
            'cost_parcent' => $this->cost_parcent,
            'cost' => $this->cost,
            'rap_parcent' => $this->rap_parcent,
            'sale_prise' => $this->sale_prise,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'shape', $this->shape])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'clarity', $this->clarity])
            ->andFilterWhere(['like', 'lab', $this->lab])
            ->andFilterWhere(['like', 'cert', $this->cert])
            ->andFilterWhere(['like', 'sym', $this->sym])
            ->andFilterWhere(['like', 'flour', $this->flour])
            ->andFilterWhere(['like', 'cut', $this->cut])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'culet', $this->culet])
            ->andFilterWhere(['like', 'girdle', $this->girdle]);

        return $dataProvider;
    }
}
