<!DOCTYPE html>
	<html >
	<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  >
    <title>insert data into database using form </title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	</head>
    <body >
         <center>
         <h1 ><strong><u>Insert Data </u></strong></h1>
         <div  ng-app="insert" ng-controller="myController">
         <form  autocomplete="off" >   
         <label>Name</label><br/><input type="text" name="name" ng-model="name" class="form-control" ><br/><br/>
         <label>Email</label><br/><input type="email" name="email" ng-model="email" class="form-control" ><br/><br/>
         <label>Age</label><br/><input type="text" name="age" ng-model="age" class="form-control" ><br/><br/>
         <label>Time</label><br/><input type="time" id="time" ng-model="time" class="form-control"><br/><br/>
         <button ng-click="insert()">Insert</button><br><br/>
         </form>
         </div>
         <script src="app/controller/PostControllers.js"></script>
         </center>
     </body>
 </html>
