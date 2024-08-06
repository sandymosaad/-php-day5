 <?php

class Human {
    protected $name;
    protected $age;
    protected $gender;
    protected $nationality;
    protected $address;
    protected $birthdate;
    protected $languages;
    protected $bloodType;
    protected $height;
    protected $weight;
    protected $healthStatus;

    public function __construct($name, $age, $gender, $nationality) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->nationality = $nationality;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function getBloodType() {
        return $this->bloodType;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHealthStatus() {
        return $this->healthStatus;
    }

    public function setBloodType($bloodType) {
        $this->bloodType = $bloodType;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setHealthStatus($healthStatus) {
        $this->healthStatus = $healthStatus;
    }
}
?>
 <?php
class Employee extends Human {
    
    private $employeeID;
    private $position; 
    private $salary; 
    private $department; 
    private $hireDate; 
    private $supervisor; 
    private $workHours; 
    private $employmentType;
    
    public function __construct($name, $age, $gender, $nationality, $employeeID, $position, $salary, $department)
    { parent::__construct($name, $age, $gender, $nationality);
    $this->employeeID = $employeeID;
    $this->position = $position;
    $this->salary = $salary;
    $this->department = $department;
    }

    
    public function getEmployeeID() {
    return $this->employeeID;
    }

    public function getPosition() {
    return $this->position;
    }

    public function getSalary() {
    return $this->salary;
    }

    public function getDepartment() {
    return $this->department;
    }

    public function setEmployeeID($employeeID) {
    $this->employeeID = $employeeID;
    }

    public function setPosition($position) {
    $this->position = $position;
    }

    public function setSalary($salary) {
    $this->salary = $salary;
    }

    public function setDepartment($department) {
    $this->department = $department;
    }

    public function getHireDate() {
    return $this->hireDate;
    }

    public function setHireDate($hireDate) {
    $this->hireDate = $hireDate;
    }

    public function getSupervisor() {
    return $this->supervisor;
    }

    public function setSupervisor($supervisor) {
    $this->supervisor = $supervisor;
    }

    public function getWorkHours() {
    return $this->workHours;
    }

    public function setWorkHours($workHours) {
    $this->workHours = $workHours;
    }

    public function getEmploymentType() {
    return $this->employmentType;
    }

    public function setEmploymentType($employmentType) {
    $this->employmentType = $employmentType;
    }

    public function calculateAnnualSalary() {
    return $this->salary * 12;
    }

    public function promote($newPosition, $newSalary) {
    $this->position = $newPosition;
    $this->salary = $newSalary;
    }

    }
$human = new Human("steven", 20, "Male", "Egyption");

$human->setBloodType("O+");
$human->setHeight(1.75);
$human->setWeight(70);
$human->setHealthStatus("Healthy");

echo "\n Blood Type: " . $human->getBloodType() ;
echo "\n Height: " . $human->getHeight() . " meters" ;
echo "\n Weight: " . $human->getWeight() . " kg" ;
echo "\n Health Status: " . $human->getHealthStatus() ;

$employee = new Employee("Sandy", 23, "Female", "Egyptian", "E123", "Developer", 5000, "IT");


echo "\n Annual Salary: " . $employee->calculateAnnualSalary() . " EGP" ;

$employee->promote("Senior Developer", 7000);

$employee->setHireDate("2024-05-21");
$employee->setSupervisor("Ahmed");
$employee->setWorkHours(40);
$employee->setEmploymentType("Full-time");

echo "\n Hire Date: " . $employee->getHireDate()  ;
echo "\n Supervisor: " . $employee->getSupervisor() ;
echo "\n Work Hours: " . $employee->getWorkHours() . " hours per week" ;
echo "\n Employment Type: " . $employee->getEmploymentType() ;
?>