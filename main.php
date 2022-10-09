<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	 
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
		    <img  scr="face3.png">                    
                </div>
                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
		    <?php  echo $age;   ?>          
                    <?php switch ($age % 10) 
	               {
                        case 1:
				echo " год";
				break;
                        case 2: case 3: case 4:
				echo " года";
				break;
			default:
				echo "лет";
			}
			?>
			    </p>
                    <p> Я учусь создавать переменные </p>
		    <p> И изучаю простые операции с ними </p>
                    <p> А также упправляющие структуры </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 100;
                        $b = 200;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    
                    Пусть завтра будет и мрак и холод, <br> 
                    сегодня сердце отдам лучу. <br>
                    Я буду счастлив, я буду молод. <br>
                    Я буду дерзок. Я так хочу! <br>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>
            

    </div>


</body>
</html>
