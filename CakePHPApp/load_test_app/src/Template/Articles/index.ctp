<h1>test</h1>


<table>
    <tr>
        <th>
            タイトル
        </th>
        <th>
            内容
        </th>
        <th>
            更新日
        </th>
    </tr>
    <? foreach($articles as $article){ ?>
    <tr>
        <td>
            <?= $article->name ?>
        </td>
        <td>
            <?= $article->content ?>
            <? if(count($article->comments) > 0){ ?>
            <br />コメント:
            <? foreach($comment as $article->comments){ ?>
            <br /><?= $comment->content ?>
            <? } ?>
            <? } ?>
        </td>
        <td>
            <?= $article->modified ?>
        </td>

    </tr>
    <? } ?>
</table>
