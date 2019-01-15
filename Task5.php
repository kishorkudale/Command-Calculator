<?php
class calculator
{
    public function __construct($argv)
    {
        if(count($argv)>1)
        {
            switch ($argv['1']) 
            {
                case 'add':
                {
                    $numbers_array = explode(',', trim(stripslashes($argv['2']??$argv['2']??0),","));
                    $sum=0;
                    foreach($numbers_array as $item)
                    {
                        if($item>=0)
                        {
                            $sum=$sum+$item;
                        }
                        else
                        {
                            echo "Error: Negative numbers not allowed.";exit;
                        }
                    }
                    echo $sum;                    
                    break;
                }
                default: 
                {
                    echo 'No operation specified';
                }
            }    
        }    
        else
        {
            echo 'insufficient arguments passed';
        }
    }
}
$c = new calculator($argv);
?>
