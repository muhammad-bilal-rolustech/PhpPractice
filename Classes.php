<?php  namespace myfirst;

    /**
     *Class to store infomartion about an Employee .
     *
     */
    class Employee
    {
      /**
      *attribute of Employee Class.
      *
      */
      private $name;
      private $empId;
      /**
      *parametarized constructor which recieves two parameters and populates attributes of class.
      *
      *@param $new_name to populate name attribute of class.
      *@param $new_empId to opulate empId attribute of class.
      */
     public function  __construct($new_name,$new_empId )
     {
           $this->name = $new_name ;
           $this->empId = $new_empId ;

      }
      /**
      *this function sets the name of employee.
      *
      *@param $new_name to change name of Employee.
      *@return void
      */

      function setName($new_name)
      {

        $this->name = $new_name ;
      }
      /**
      *this function returns the name of employee.
      *
      *
      *@return return name of Employee
      */
      function getName()
      {
         //echo "".$this->name;
        return $this->name;
      }
      /**
      *this function sets the empId of employee.
      *
      *@param $new_empId to change empId of Employee.
      *@return void
      */
      function setEmpid($new_id)
      {

        $this->empId = $new_id ;
      }
      /**
      *this function returns the empId of employee.
      *
      *
      *@return return empId of Employee
      */
      function getEmpid()
      {

        return $this->empId;
      }

    }
  //Object creation of Emplyee
$obj =new Employee("Bilal1",12);
$obj->setName("Bilal");
echo $obj->getName()."<br>";
echo $obj->getEmpid();
 ?>
