<?php

   $firstNameArray = ["Ted", "Jan", "Steve", "Taylor", "Lucky", "Yosuke", "Robin", "Felix", "Shannon", "Common", "Louis", "Joseph", "Jillian", "Greg", "Diane", "Dan"];
   $lastNameArray = ["Spielberg", "Red", "Hendrix", "Stone", "Holly", "Horvath", "Ernst", "Kwak", "Acott", "Scaffidi", "Venture", "Narukami", "Arlene", "Sez"];
   $majorArray = ["Computer Science", "Pornography", "Drinking", "Zoology", "Sustainability", "Anthropology", "English", "Communications", "Biology", "Math"];
   $schoolYearArray = ["Freshman", "Sophomore", "Junior", "Senior"];
   $relationshipArray = ["Single", "Dating", "It's Complicated", "???", "Prefer Not TO Say"];
   $randomString1 = ["Hello I love long walks on the beach", "But why should you listen to me?", "I tried to call you names", "I'm rich", "University of Illinois", "Working on boring plane stuff for a watch company", "Here she comes now", "Amonia has been a major problem", "Here comes the baby", "Have I been speling this wrong the whole time?", "I feel mildly ill", "Bottle rocket", "I'm doing something"];

   $servername = "oniddb.cws.oregonstate.edu";
   $username = "horvatha-db";
   $password = "4xunHq7hNuAmTgFb";
   $dbName = "horvatha-db";
   $finalDB = new mysqli($servername, $username, $password, $dbName);
   $query = "INSERT INTO User_T(UserID, Gender, firstName, lastName, phone, major, age, schYear, relationshipStatus, bio,  HouseID) Values(?,?,?,?,?,?,?,?,?,?,?)";
   $genderArray = ["male", "female", "other", "prefer not to say"];
   
   if($statement = $finalDB->prepare($query)){
      for($i = 0; $i < 1000; $i++){
       $userId = rand(4, 2000);
       $gender = $genderArray[rand()%4];
       $firstName = $firstNameArray[rand()%16];
       $lastName = $lastNameArray[rand()%14];
       $phone = rand(100000000, 999999999);
       $major = $majorArray[rand()%10];
       $age = rand(18, 99);
       $schYear = $schoolYearArray[rand()%4];
       $relationshipStatus = $relationshipArray[rand()%5];
       $bio = $randomString1[rand()%13] . $randomString1[rand()%13];
       //$Profile = NULL;
       $HouseID = rand(4, 2000);

       $statement->bind_param('isssssssssi',$userId, $gender, $firstName, $lastName, $phone, $major, $age, $schYear, $relationshipStatus, $bio, $HouseID);
       $statement->execute();
      }
      $statement->close();
   }
   else{
       printf("What the fuck???\n");
   }


?>
