->What is the SQL?
SQL is a language specifically designed to work with database in order to:
    .STORE DATA
    .Retrieve Data
    .Manipulate Data

    ->table:
   
->Find maximum salary of employee?
.select*from employee where salary=(select max(salary) from employee);

->Find second maximum salary of employee?
.select*from employee where salary=(select max(salary) from employee where salary<(select max(salary) from employee))

->Retrieve all the information of employee whose name begins with 'A'?
.select*from employee where name like 'k%';

->select all the information of employee whose salary is 2100,2000 and 3000?
.select *from employee where salary in(2000,9000);

->new table create kro jo iss table ka data us table me show ho jaye ?
.create table employee2 as select *from employee;

->Find all employee recods whose salary is between 10000 to 15000?
between(ek operator hea jo range find krta yha se baha tak)
select*from employee where salary between 10000 and 15000;

->Write a SQL to delete more than one record?
.delete from employee where id in(1,2,3)

->data type change krna int ko string me change krne liye.
.ALTER TABLE `employee` CHANGE `age` age VARCHAR(11) NOT NULL;


*->starting in sql query:
i>first step in:insert,miltiple insert:
-insert into student (id,name,city) values ('1','krishna','gwalior');
-insert into student (id,name,city) values ('1','krishna','gwalior'),('2','vanshika','ahmedabad');

ii>second step:update,alter,add,drop,change:
-update student set name='krishna' where id=1 
-alter table student ADD 'state' text null  //new column add
-alter table student DROP 'state'       //delete column
-alter table student change 'name' 'name' integer  // data type change krna
-alter table student change 'name' 'csname'  //coloumn name change






















