<?php

namespace backend\modules\settings\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\settings\models\Settings;

/**
 * SettingsSearch represents the model behind the search form about `backend\modules\settings\models\Settings`.
 */
class SettingsSearch extends Settings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['site_name', 'site_email', 'site_phone', 'inport_file_url', 'import_images_url'], 'safe'],
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
        $query = Settings::find();

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
        ]);

        $query->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'site_email', $this->site_email])
            ->andFilterWhere(['like', 'site_phone', $this->site_phone])
            ->andFilterWhere(['like', 'inport_file_url', $this->inport_file_url])
            ->andFilterWhere(['like', 'import_images_url', $this->import_images_url]);

        return $dataProvider;
    }
}
