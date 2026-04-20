<?php
do {
    echo "Введите, пожалуйста, число:" . PHP_EOL;
    $num1 = trim(fgets(STDIN)); // получаем переменную string
    $num1Int = intval($num1); // приводим к целочисленному типу
    $num1Float = floatval($num1);// приводим к типу с плавающей точкой
     
      if (is_numeric($num1) && ($num1Int - $num1Float == 0)) { // проверяем введенное значение на цифры или буквы и целочисленное значени
         echo "числитель равен ". $num1 . PHP_EOL; // все ОК показываем значение числителя
        break;}
       //echo "упс руки-крюки, введите целое число". PHP_EOL;
       fwrite(STDERR, "введено не целое число\n");
}
  while(true);
  
do {
  echo "Введите, пожалуйста, число:" . PHP_EOL;
  $num2 = trim(fgets(STDIN)); // получаем переменную string
  $num2Int = intval($num2); // приводим к целочисленному типу
  $num2Float = floatval($num2);// приводим к типу с плавающей точкой
  if (is_numeric($num2) && ($num2Int - $num2Float == 0) && $num2!=0) { // проверяем введенное значение на цифры или буквы
   echo "знаменатель: ". $num2 . PHP_EOL; // все ОК выводит значение знаменателя
   break;}
   if ($num2 ==0) {
    //echo "знаменатель не может быть равен НУЛЮ". PHP_EOL;
    fwrite(STDERR, "Делить на 0 нельзя\n");
   }
   else {
   // echo "упс руки-крюки, введите целое число". PHP_EOL;
    fwrite(STDERR, "введено не целое число\n");
   }
  }
  while(true);
echo "Результат деления: ".$num1/$num2. PHP_EOL;
