<?php

    $arr1=array(22 ,18, 4 ,27 ,21 ,27 ,29 ,26 ,25 ,12 ,29 ,14 ,12 ,29 ,0 );
    $arr2=array(25 ,4 ,19 ,28 ,25 ,27 ,3 ,2 ,25 ,29 ,8 ,27 ,14 ,8 ,27 ,8 ,5 ,23 ,1 ,1);

    print_r($arr1);
    print("\n</br>");
    print_r($arr2);
    print("\n</br>");

    $flag=1;
    for($i=0;$i<15;$i++)
    {
        $flag=1;
        for($j=0;$j<$i;$j++)
        {
            if($arr1[$i]==$arr1[$j])
                $flag=0;
        }
        if($flag)
        {
            for($j=0;$j<20;$j++)
            {
                if($arr1[$i]==$arr2[$j])
                {
                    echo "$arr1[$i] ";
                    break;
                }
            }
        }
    }

    
?>
