<?php

function self_introduction($skills, $likes)
{
    $skills_quantities = count($skills);
    $likes_quantities = count($likes);

    // $tmp = $skills; どうして$tmpに置き換えるのか不明
    $all_skills = '';
    foreach ($skills as $skill) {
        $all_skills .= $skill;
        // if (next($tmp) !== false) {
        if (next($skills) !== false) {
            $all_skills .= '、';
        }
    }

    // $tmp = $likes;
    $all_likes = '';
    foreach ($likes as $like) {
        $all_likes .= $like;
        // if (next($tmp) !== false) {
        if (next($likes) !== false) {
            $all_likes .= '、';
        }
    }
    // コードを追記

    return <<<EOM
    私の特技は{$skills_quantities}個あり、{$all_skills}です｡<br>
    また、趣味は{$likes_quantities}個あり、{$all_likes} です｡
    EOM;
}

$skills = ['書道', '料理', '英会話', '作文'];
$likes = ['ランニング', '釣り', '運転'];

// 確認
// var_dump($skills_quantities);

echo self_introduction($skills, $likes);

