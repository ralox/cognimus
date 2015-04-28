<?php
    /*
    * This script builds the basic elements of the table 
    *
    * a = array
    * i = integer
    * s = string
    * b = boolean
    */

    include "db_config.php";


    $ai_periods_by_row = [1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>6,9=>7];
    // you should make this database style probably
    $aa_blocks_by_row = [
                        1 => [1,'e','e','e','e','e','e','e','e','e','e','e','e','e','e','e','e',2],
                        2 => [3,4,'e','e','e','e','e','e','e','e','e','e',5,6,7,8,9,10],
	                    3 => [11,12,'e','e','e','e','e','e','e','e','e','e',13,14,15,16,17,18],
	                    4 => [19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36],
	                    5 => [37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54],
	                    6 => [55,56,'+',72,73,74,75,76,77,78,79,80,81,82,83,84,85,86],
	                    7 => [87,88,'-',104,105,106,107,108,109,110,111,112,113,114,115,116,117,118],
	                    8 => ['e','e','+',57,58,59,60,61,62,63,64,65,66,67,68,69,70,71],
	                    9 => ['e','e','-',89,90,91,92,93,94,95,96,97,98,99,100,101,102,103]
                        ];


	// create an element block with the proper data
    // ["data-info" => $data{'atomic_num'}, "atomic_num-ptable" => $data{'atomic_num'}, "symbol-ptable" => $data{'symbol'}];
    function createElement($i_atomic_num){

        global $db; //use the globally defined database

        try{
            $rawdata = $db->query("select atomic_num, name, symbol from elements where atomic_num=".$i_atomic_num);
            $pdo_data = $rawdata->fetchAll(PDO::FETCH_ASSOC)[0];
        }catch(PDOExceptions $ex){
            echo "Sugarsticks! I couldn't pull an element from the database.";
        }

        echo "<div class='block-ptable element-ptable' data-info='".$pdo_data['atomic_num']."' title='".$pdo_data['name']."'>";
        echo "<div class='atomic_num-ptable'>".$pdo_data['atomic_num']."</div>";
        echo "<p class='symbol-ptable'>".$pdo_data['symbol']."</p>";
        echo "</div>";
    }

    // create an empty block...which is essentially the same as an element block but it has no data
    function createEmptyBlock(){
        echo "<div class='empty block-ptable'></div>";
    }

    // create a key block which links rows 6->8 and 7->9
	function createKeyBlock($i_block){
        if ($i_block == '+'){
            $i_key = 1;
            $s_range = "57-71";
        }else{
            $s_range = "89-103";
            $i_key = 2;
        }
        echo "<div class='key".$i_key."-ptable block-ptable'>";
        echo "<div class='atomic_num-ptable'>".$s_range."</div>";
        echo "<p class='symbol-ptable'>".$i_block."</p>";
        echo "</div>";
	}

	 // create a row of the table
    function createRows(){
    	global $aa_blocks_by_row, $ai_periods_by_row;
        foreach ($aa_blocks_by_row as $i_row => $a_blocks){
            echo "<div class='period period-".$ai_periods_by_row[$i_row]."'>";
            foreach ($a_blocks as $block){
            	if ($block == 'e'){
            		createEmptyBlock();
            	}elseif ($block === '+' || $block === '-') {
            		createKeyBlock($block);
            	}else{
            		createElement($block);
            	}
            }
            echo "</div>";
        }
    }


    // create the rows!
    createRows();
?>
