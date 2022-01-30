<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    Public $x;
    Public $y;
    public $data = [];

    public function index()
    {
        /* $this->firstName='Raham';
         $this->lastName='Khan';
         echo "full name is ".$this->firstName." ".$this->lastName;*/
        /* $this->x=10;
         $this->y=20;
         echo $this->x + $this->y;
         echo'<br/>';
         echo $this->x - $this->y;
         echo'<br/>';
         echo $this->x * $this->y;
         echo'<br/>';
         echo $this->x / $this->y;
         echo'<br/>';
         echo $this->x % $this->y;*/
        /*Assignment operator
                $this->x=10;
                $this->y=20;
                echo $this->x += $this->y;
                echo '<br/>';
                echo $this->x -= $this->y;
                echo '<br/>';
                echo $this->x *= $this->y;
                echo '<br/>';
                echo $this->x /= $this->y;
                echo '<br/>';
                echo $this->x %= $this->y;
                echo '<br/>';
                echo $this->x .= $this->y;*/

        /*       $this->x=10;
               $this->y=20;
               $this->z=30;
               echo ($this->x > $this->y) && ($this->x > $this->z);
               echo '<br/>......<br/>';
               echo ($this->x > $this->y) && ($this->x < $this->z);
               echo '<br/>......<br/>';
               echo ($this->x < $this->y) && ($this->x > $this->z);
               echo '<br/>......<br/>';
               echo ($this->x < $this->y) && ($this->x < $this->z);
               echo '<br/>......<br/>';*/

       



     
        
      /*$this->x =10;
      switch($this->x)
      {
          case 10:
            echo 'hello world';
            break;
          case 20:
            echo 'hello bangladesh';
          case 30:
            echo 'hello dhaka';
            break;
        default:
            echo 'Hello BITM';
            }*/
       /* for ($this->y =1; $this->y <=76; $this->y--)
        {
            echo 'hello world<br/>';
        }*/
     /*   $this->x=100;
        while ($this->x < 100)
        {
            echo 'hello world<br/>';
            $this->x++;
        }*/
       /* $this->x = 100;
        do{
            echo 'hello world<br/>';
            $this->x++;
        }
        while ($this->x < 110);*/

        $this->data = [10, 20, 30, 'BITM', 100.200, true];
        /*echo $this->data[3];*/
        foreach ($this->data as $item)
        {
            echo $item;
        }

    }
   }
