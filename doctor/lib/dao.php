<?php
include_once 'dbconnect.php';
include_once  'interface1.php';

class dao implements interface1 
{    
    private $conn;
    function __construct() 
    {
        //include_once './config.php';
       
        $db=new DbConnect();
        $this->conn=$db->connect();
    }

    //data insert funtion
    function insert($table,$value)
    {
        $field="";
        $val="";
        $i=0;
        
        foreach ($value as $k => $v)
        {
            $v= str_replace("'", "", $v);
            if($i == 0)
            {
                $field.=$k;
                $val.="'".$v."'";
            }
            
            else 
            {
                $field.=",".$k;
                $val.=",'".$v."'";
                
            }
            $i++;
            
        }
        return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));
    }

    //using insert funtion for procedures 
    function insert1($table, $value)
    {
        $field="";
        $val="";
        $i = 0;
        
          foreach($value as $k => $v)
          {
            $v= str_replace("'", "", $v);
              if($i==0)
             
               {
                  $field.=$k;
                  $val.="'" . $v . "'";
              }
              else 
              {
                  $field.="," . $k ;
                  $val.=", '" . $v . "'";
              }
              $i++;
          }
          return mysqli_query($this->conn,"CALL $table($val)")or die(mysqli_error($this->conn));;
    }
    
      //select funtion display data
    function select($table, $where='', $other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        $select = mysqli_query($this->conn,"SELECT * FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }

      //select funtion display data
    function selectRow($colum,$table, $where='', $other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        $select = mysqli_query($this->conn,"SELECT $colum FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }
    function select_row($table, $where='', $other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        
        $select = mysqli_query($this->conn,"SELECT COUNT(*) as num_rows FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }
     //select funtion display data with DISTINCT  (not show duplicate)
    function select1($table, $column, $where='',$other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        $select = mysqli_query($this->conn,"SELECT DISTINCT $column FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }
    function select2($table, $where='',$other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        $select = mysqli_query($this->conn,"SELECT DISTINCT * FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }
    function selectColumnWise($table,$columnName='',$where=''){
        if($where != '')
        {
           $where= 'where ' .$where;
        }
         $select = mysqli_query($this->conn,"SELECT $columnName FROM $table $where") or die(mysqli_error($this->conn));
        return $select;
    }
   
   
      //delete using update query(active_flag)
     function delete1($table ,$var, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        if($var != '')
        {
            $var= 'active_flag= ' .$var;
        }
        return mysqli_query($this->conn,"update $table set $var $where");
    }

    //Update Product View (view_status)
     function view_status($table ,$var, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        if($var != '')
        {
            $var= 'view_status= ' .$var;
        }
        return mysqli_query($this->conn,"update $table set $var $where");
    }


     //Comment ()
     function comment($table ,$var, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        if($var != '')
        {
            $var= 'status= ' .$var;
        }
        return mysqli_query($this->conn,"update $table set $var $where");
    }
     //delete permanataly  function
    function delete($table , $where='')
    {
        if($where != '')
        {
        $where= 'where ' .$where;
        }
        return mysqli_query($this->conn,"delete FROM $table $where")or die(mysqli_error($this->conn));
    }

    //Upadate funtion
    function update($table ,$value, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }


        $val="";
        $i=0;
        foreach ($value as $k => $v)
        {
            $v= str_replace("'", "", $v);
            if($i == 0)
            {
              $val.=$k."='".$v."'";    
            }
            
            else 
            {
              $val.=",".$k."='".$v."'";
            }
            $i++;
            
        }
        return mysqli_query($this->conn,"update $table SET $val $where");
    }
     //select next auto_increment_id
    function last_auto_id($table)
    {
        
        $select_id = mysqli_query($this->conn,"SHOW TABLE STATUS LIKE '$table'" ) or die(mysqli_error($this->conn));
        return $select_id;
    }

        //Count Data of Table
    function count_data($field='' ,$table ,$where='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }

        $count_data = mysqli_query($this->conn,"SELECT $field,COUNT(*)  FROM $table $where" ) or die(mysqli_error($this->conn));
        return $count_data;

    }

    
    //Count Data of Table
    function count_data_direct($field='' ,$table ,$where='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }

        $temp = mysqli_query($this->conn,"SELECT $field,COUNT(*)  FROM $table $where" ) or die(mysqli_error($this->conn));
        while($rowCount=mysqli_fetch_array($temp)) {
             $totalCount=$rowCount['COUNT(*)'];
        return $totalCount;
        }

    }
    
     //Count sum of  Table field
    function sum_data($field='' ,$table ,$where='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }

        $sum_data = mysqli_query($this->conn,"SELECT SUM($field) from `$table` $where" ) or die(mysqli_error($this->conn));
        return $sum_data;

    }

// developed by Dharmendrasinh
// check main category is already exist
function isMainCategoryExist($category_name){
   $sql="SELECT category_name FROM categories_master WHERE category_name='$category_name'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
    return true;
   }
   else{
    return false;
   }
}
function isSubCategoryExist($subCategoryName){
   $sql="SELECT sub_category_name FROM sub_categories_master WHERE sub_category_name='$subCategoryName'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
    return true;
   }
   else{
    return false;
   }
}
//checking category is available or not
function checkMainCategory($mainCatgeory){
     
   $sql="SELECT category_id FROM categories_master WHERE category_id='$mainCatgeory'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
    return true;
   }
   else{
    return false;
   }
  }
  // checking sub category in product
  function checkSubCategory($subCategory){
   $sql="SELECT sub_category_id FROM sub_categories_master WHERE sub_category_id='$subCategory'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
    return true;
   }
   else{
    return false;
   }
  }
  // checking product in table
  function checkProduct($product){
   $sql="SELECT product_id FROM products_master WHERE product_id='$product'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
    return true;
   }
   else{
    return false;
   }
  }
  //checking product in table using product name
   function checkProductUsingName($productName){
   $sql="SELECT product_name FROM products_master WHERE product_name='$productName'";
   $temp=mysqli_query($this->conn,$sql);
   $data=mysqli_fetch_array($temp);
   if($data > 0){
        return true;
   }
   else{
       return false;
    }
   
  }
  //checking produt using as it is value
  function checkProductIdUsingName($productName,$productId){
     $sql="SELECT sub_product_id FROM sub_product_master WHERE c_product_name='$productName'";
     $temp=mysqli_query($this->conn,$sql);
     $data=mysqli_fetch_array($temp);
     if($data > 0){
           if($data['sub_product_id']==$productId){
             return true;  
            }
          
          else{
            return false;
          }
     }
     else{
         return false;
      }
   
  }
  // checking sub product in tabel
  function checkSubProduct($subProduct){
       $sql="SELECT c_product_name FROM sub_product_master WHERE  sub_product_id='$subProduct'";
       $temp=mysqli_query($this->conn,$sql);
       $data=mysqli_fetch_array($temp);
       if($data > 0){
        return true;
       }
       else{
        return false;
       }
  }
}
?>