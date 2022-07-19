<?php

$blood_type = 'C';

switch ($blood_type) {
    case 'A':
        echo $blood_type . '型の方は几帳面だけど優しいらしいです！';
        break;
    case 'B':
        echo $blood_type . '型の方は好奇心旺盛らしいです！';
        break;
    case 'AB':
        echo $blood_type . '型の方は先読み思考に優れた天才らしいです！';
        break;
    case 'O':
        echo $blood_type . '型の方はおおらからしいです！';
        break;
    default:
        echo '判定不能です！';
        break;
}
