#!/bin/bash
NEWDB=garage_crm
NEWDB_USER=garage_crm
NEWDB_PASS=garage@123

MYSQL=`which mysql`
 
Q1="CREATE DATABASE IF NOT EXISTS $NEWDB;"
Q2="GRANT ALL ON *.* TO '$NEWDB_USER'@'localhost' IDENTIFIED BY '$NEWDB_PASS';"
Q3="FLUSH PRIVILEGES;"
SQL="${Q1}${Q2}${Q3}"

echo "Welcome to Garage CRM DB setup"
echo "Please Enter DB root Password: "
$MYSQL -uroot -p -e "$SQL"
