<?php

    /**
     *Class to store infomartion about an Employee .
     *
     */
  abstract  class Employee
    {
      /**
      *name attribute of Employee Class.
      *
      */
      private $name;
      /**
      *empId attribute of Employee Class.
      *
      */
      private $empId;
      /**
      *parametarized constructor which recieves two parameters and populates attributes of class.
      *
      *@param $new_name to populate name attribute of class.
      *@param $new_empId to opulate empId attribute of class.
      */
     public function  Employee($new_name,$new_empId )
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
      /**
      *this is abstract function that .
      *
      */
       abstract public function  calcSalary();

    }


/**
*This class Extends Employee class and implement calcSalary method
*
*/


class SalariedEmployee Extends Employee
{
  /**
  *The attributes of class to track employees salary
  *
  */

  private $salary ;
  /**
  *Constructor of Salaried employee.
  *
  */
  public function SalariedEmployee($sal)
  {
       $this->salary  =$sal;

  }
  /**
  *this function returns the salary of SalariedEmployee.
  *
  *
  *@return return salary of Employee
  */
  public function calcSalary()
  {
      return $this->salary ;

  }
}
class HourlyEmployee Extends Employee
{
  /**
  *contains hours worked by employee
  *
  */

  private $hoursWorked ;
  /**
  *contains pay per hour for employee
  *
  */
  private $payPerhour ;
  /**
  *Constructor of Hourly  employee.
  *
  *@param $hours worked by employee.
  *@param $pay contains pay per hour
  */
  public function HourlyEmployee($hours , $pay)
  {
       $this->hoursWorked  =$hours;
       $this->payPerhour = $pay ;

  }
  /**
  *this function returns the salary of HoutlyEmployee.
  *
  *@return return salary of Employee after calculating
  */
  public function calcSalary()
  {
      return $this->hoursWorked * $this->payPerhour ;

  }
}

$obj[0] = new SalariedEmployee(50000);
$obj[1] = new SalariedEmployee(70000);
$obj[2] = new HourlyEmployee(50,5000);
$obj[3] = new HourlyEmployee(50,5000);

foreach ($obj as $key ) {
    echo  $key->calcSalary()."<br>";
}













 ?>
