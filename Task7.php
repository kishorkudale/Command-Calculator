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
                    $negative_numbers="";
                    $flag=1;
                    foreach($numbers_array as $item)
                    {
                        if($item>=0)
                        {
                            if($item<1000)
                            {
                                $sum=$sum+$item;
                            }
                        }
                        else
                        {
                            $flag=0;
                            $negative_numbers.=$item.",";
                        }
                    }
                    if($flag==1)
                    {
                        echo $sum;
                    }
                    else
                    {
                        echo "Error: Negative numbers [$negative_numbers] not allowed.";
                    }                    
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
