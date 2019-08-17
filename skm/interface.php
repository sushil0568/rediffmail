<?php
interface company{
const turnover = '20cr';
public function department();
public function employee_count();

}
interface employee{
 
    const count = 45;
public function employee_name($fname,$lname);
public function employee_qualification($qualification);
}

class Details implements company,employee{
    
    public function department() {
        echo "Department = IT";
        
    }
    public function employee_count() {
        return "Total Employee=". self::count;
        
    }
    
    public function employee_name($fname,$lname,$prefix=null) {
        return $prefix.' '.$fname.' '.$lname;
        
    }
    
    public function employee_qualification($qualification) {
        return $qualification;
        
    }
    
    public function company_name($comp_name){
        return "company name = ".$comp_name;
    
    }
}
    
    
    


$obj = new Details();

echo $obj->company_name("Biipbyte technology pvt ltd"); echo "<br/>";
echo "Turn Over= ". $obj :: turnover; echo "<br/>";
echo $obj->department(); echo "<br/>";
echo $obj->employee_count(); echo "<br/>";


echo $obj->employee_name("sushil","mishra","Er"); echo "<br/>";
echo $obj->employee_qualification("BE"); echo "<br/>";
