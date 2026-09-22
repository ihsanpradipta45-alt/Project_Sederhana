@echo off
mysqldump -u root --skip-dump-date --skip-extended-insert --result-file=database\projek_crud.sql projek_crud
echo Export selesai