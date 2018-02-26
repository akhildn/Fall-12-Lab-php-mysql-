<?php
	$con=mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_query("CREATE DATABASE project") or die(mysql_error());
	mysql_select_db("project") or die(mysql_error());
	mysql_query("CREATE TABLE user(username varchar(20), password varchar(20), level varchar(20))") or die(mysql_error());
	mysql_query("INSERT INTO user(username,password,level) VALUES('127','akhil','admin')") or die(mysql_error());	

	mysql_query("CREATE TABLE student(idnum varchar(20) NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) , age int, sex varchar(100))") or die(mysql_error());		
	mysql_query("CREATE TABLE Icourse(idnum varchar(20) NOT NULL PRIMARY KEY , cname varchar(100) )") or die(mysql_error());		
	mysql_query("CREATE TABLE Ccourse(idnum varchar(20) NOT NULL PRIMARY KEY , Cname varchar(100))") or die(mysql_error());		
	
	mysql_query("CREATE TABLE iccatalog(sc  varchar(20) PRIMARY KEY , sn varchar(100), credits int(20))") or die(mysql_error());	
	mysql_query("CREATE TABLE cccatalog(sc  varchar(20) PRIMARY KEY , sn varchar(100), credits int(20))") or die(mysql_error());	
	
	mysql_query("INSERT INTO iccatalog(sc,sn,credits) VALUES('3FC01','DATA BASE MANAGEMENT SYSTEMS',3)") or die(mysql_error());
	mysql_query("INSERT INTO iccatalog(sc,sn,credits) VALUES('3FC02','SHELL PROGRAMMING & SCRIPTING LANGUAGES',3)") or die(mysql_error());
	mysql_query("INSERT INTO iccatalog(sc,sn,credits) VALUES('3FC03','DESIGN AND ANALYSIS OF ALGORITHMS',4)") or die(mysql_error());

	
	mysql_query("INSERT INTO cccatalog(sc,sn,credits) VALUES('3GC01','DATA BASE MANAGEMENT SYSTEMS',4)") or die(mysql_error());
	mysql_query("INSERT INTO cccatalog(sc,sn,credits) VALUES('3GC02','Computer Organization',3)") or die(mysql_error());
	mysql_query("INSERT INTO cccatalog(sc,sn,credits) VALUES('3GC03','Object Oriented Programming',3)") or die(mysql_error());
	mysql_query("INSERT INTO cccatalog(sc,sn,credits) VALUES('3GC04','DESIGN AND ANALYSIS OF ALGORITHMS',4)") or die(mysql_error());
	
	

	header("Location: index.php");
?>