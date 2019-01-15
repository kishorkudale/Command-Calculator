<?php
class calculator
{
    public function __construct($argv,$delimiter)
    {
        if(count($argv)>1)
        {
            switch ($argv['1']) 
            {
                case 'add':
                {
                    $numbers_array = explode($delimiter, stripslashes($argv['2']??$argv['2']??0));
                    $sum=0;
                    foreach($numbers_array as $item)
                    {
                        $sum=$sum+$item;
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
echo "Please enter delimiter character:";
$handle = fopen ("php://stdin","r");
$delimiter = fgets($handle);
$c = new calculator($argv,$delimiter);
?>
