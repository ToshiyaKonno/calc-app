<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calcApp</title>
</head>

<body>
    @php
    if ($calcs == 'addition') {
        $answer = $num1 + $num2;
        # code...
    }elseif ($calcs == 'subtraction') {
        $answer = $num1 -$num2;
        # code...
    }elseif ($calcs == 'multiplication') {
         $answer = $num1 * $num2;
        # code...
    }elseif ($calcs == 'division') {
        $answer = $num1 / $num2;
        # code...
    }
        
    @endphp
<h1>計算アプリ</h1>


{{ $answer}}


</body>

</html>