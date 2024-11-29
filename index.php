<?php

do {

echo '最大値を入力してください。'."\n";
$max = fgets(STDIN);
echo '最大値が' . trim($max) . 'に設定されました。'."\n";

echo '最小値を入力してください。'."\n";
$min = fgets(STDIN);
echo '最小値が' . trim($min) . 'に設定されました。'."\n";

if($min>=$max){
    echo '最小値は最大値より小さく設定する必要があります。もう一度入力してください。'."\n";
}

} while ($min>=$max);

$correctNumber = rand($min,$max);
echo '答えは' . trim($correctNumber) ."\n";

echo '数あてゲームを開始します。範囲は' . trim($min) . 'から' . trim($max) ."\n";

do {
    echo '任意の数字を入力してください。';
    $guessNumber = fgets(STDIN);

    if($guessNumber < $correctNumber){
        echo 'もっと大きな数字です。' ."\n";
    } elseif ($guessNumber > $correctNumber){
        echo 'もっと小さい数字です。' ."\n";
    } elseif ($guessNumber = $correctNumber){
        echo '正解です！' ."\n";
    }
} while ($guessNumber != $correctNumber);