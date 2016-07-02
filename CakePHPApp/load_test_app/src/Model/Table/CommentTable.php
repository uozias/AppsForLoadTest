<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
/**
 * Created by IntelliJ IDEA.
 * User: aoyagisaizo
 * Date: 2016/07/02
 * Time: 11:53
 */
class CommentTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id',
        ]);
    }
}
