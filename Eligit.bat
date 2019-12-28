@echo off
set /p message=Enter Your Message : 
git add .
git commit -m "%message%"
git pull
git push origin master