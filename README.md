# Catalyst
echo "# Catalyst" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/wendmt/Catalyst.git
git push -u origin master

Coding Challenge
Import a CSV file into a MySQL table.

Stages:
1. Create html for user to upload csv file(optional, not match the reqirements)
2. Create user_upload.php
   - PHP script for insert data from csv file into database
     Create table in database
     Insert data into table
3. Create Database to allow to import csv file into it
   - Database created without tables
   - Create table via php script
   - Insert data into table
4. Create foobar.php
   - Output number from 1 to 100
   - Output "foo" where the number is divisible by 3
   - Output "bar" where the number is divisible by 5
   - Output "foobar" where the number is divisible by 3 and 5

All the scripts, works were developed on MAC environment

Database has been created in DreamHost - Host: mysql.saintpegasus1984.com
   - Details can be found in catacsv.sql document.
