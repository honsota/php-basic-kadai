<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta cherset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
    <?php
     
    function sort_2way($array, $order){
      

        if($order) {
            print '昇順にソートします。<br>';

            sort($array);
            foreach ($array as $num) {
                print $num . '<br>';
            }
        } else {
            print '降順にソートします。<br>';
            rsort($array);
            foreach ($array as $num) {
                print $num . '<br>';
            }
        }
        return $array ;
    }
    $nums = [15, 4, 18, 23, 10];
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
     
    
    ?>
    </p>
  </body>
</html>