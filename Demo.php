<?php


class Demo
{
public function demo(){
    if(isset($_POST['btn'])){
        $first = $_POST['firstNumber'];
        $last = $_POST['lastNumber'];
        $choose =$_POST['check'];
        $res="";
        if ($first<$last){

            for ($i = $first; $i<=$last;$i++)
            {

                if ($i%2!=0 && $choose=="odd"){
                    $res.= $i." ";

                }

                if ($i%2==0 && $choose=="even") {
                    $res .= $i . " ";
                }


            }
            return $res;

        }
        else{

            for ($i = $last; $i<=$first;$i--)
            {

                if ($i%2!=0 && $choose=="odd"){
                    $res.= $i." ";

                }

                if ($i%2==0 && $choose=="even") {
                    $res .= $i . " ";
                }


            }
            return $res;


        }


    }
}
}