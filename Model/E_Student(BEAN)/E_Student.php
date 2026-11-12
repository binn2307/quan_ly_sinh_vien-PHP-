<?php

class sinhvien{
   private ?int $id;
   private ?string $name;
   private ?int $age;
   private ?string $university;
   
   public function __construct(?int $id,string $name,int $age,string $univer)
   {
      $this->id  = $id;
      $this->name  = $name;
      $this->age  = $age;
      $this->university  = $univer;
   }

   public function getId(){
      return $this->id;
   }

   public function getName(){
      return $this->name;
   }

   public function getAge(){
      return $this->age;
   }

   public function getUniversity(){
      return $this->university;
   }
}

?>