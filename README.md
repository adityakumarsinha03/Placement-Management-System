# DBMS-Mini-Project
# Placement-Management-System


# Preview 
![](screenshort_MINi_project/home.png)

![](screenshort_MINi_project/index_home.png)
![](screenshort_MINi_project/about_index.png)
![](screenshort_MINi_project/prefrences.png)
![](screenshort_MINi_project/mail_index.png)
![](screenshort_MINi_project/hod_login_index1.png)
![](screenshort_MINi_project/hod_manage_users.png)
![](screenshort_MINi_project/hod_notif.png)

![](screenshort_MINi_project/student_index.png)


![](screenshort_MINi_project/student_dashboard.png)
![](screenshort_MINi_project/student_queries.png)
![](screenshort_MINi_project/principal_home.png)
![](screenshort_MINi_project/principal_manage_users.png)
![](screenshort_MINi_project/principal_queries.png)
![](screenshort_MINi_project/principal_student_eligibility.png)




## A Smart Way to Manage the Placement of Students

## How to use this repository in your Local machine.
   Clone the code from my account and if your are using linux and lampp stack then copy the folder to the htdocs.
   Create 2 databases  using **phpmyadmim** name of  the database should be **details** and **placement** and import the code      from the Databases folder, there are two files in total on Revised.sql and Skeleton Database.sql . You can pick any of the      codes for importing into databases.

# Code is compatible with the new version version of MySql Improvised Version
# Spoiler Alert for those who want the code should be backward compatible
Most of the php  codes are written in the Object Oriented way , but if anybody want to be in procedural way can change the 
$connect = mysqli_connect("localhost", "root","", "details");
"details " is the name of the database, and there is no password in my lammp stack.But if you have replace with your own password.



# Used Technologies

## Lanuages
  1. HTML5
  2. CSS3
  3. JavaScript
  4. PHP (Backend Database Functions) version .
  5. MySQL (Database)
  6. Bootstrap
  
  
## IDE & Tools
  1. Visual Studio 2018 (PHP Tools Installed)
  2. Visual Studio Code (All Files Editing)
  3. XAMPP (Apache Server and MySQL)
  4. LAMPP (Linux Apache and MySQL)
  5. VS Code Editor 
  
* VS Code is Used Just to Edit the Code and To Test the PHP files We need to Use Apache Server and The Source Code Local Repo Must be in the XAMPP>htdocs>folder_name


## It Contains 3 Portals and 2 Homepages:
### Portals/Profilers
  1. Student
  2. Company
  3. Admin
  
### Homepages
  1. Master Homepage
  2. Seprate Internal Homepage for Student, Company and Admin
    
## Profilers

### 1. Student
It Contains the Profile Update and The Form to Update the Biodata of a Student which is Later Fed to the HODs Profile for the Verification
### 2. Company
Company can have the authority to UPdate the drive, register the student for the drive and Querying the Database. The Master Access is given to Placement Management.
### 3. Principal
Admin Can Use Query tab to get almost all the Information He needs about a Student, Department and Overall Campus Drive Status. Admin also Verify the Details of the Student and He can Update the Notification Messages/ Placement Status.


## Homepage
### Master Homepage
It is the Main Homepage where the Links to all the Different Logins and some information about college.
### student Homepage
This Page is for the Student to Look at the Current Placement Drives News and to apply on it.
### company Homepage
This Page is for the Company to post opening for the various roles with the necessary details like location and CTC. Can also see the list of students applied.
### admin Homepage
This Page is for the admin to monitor as well as verify student and company. It updates the student status.


Original Project is created by, I have Cloned it to my local machine and modified it accordingly
https://github.com/harithsa/Placement-Management-System


