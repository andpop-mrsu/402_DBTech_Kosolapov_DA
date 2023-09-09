@echo off
setlocal enabledelayedexpansion
chcp 65001 > NUL

set DB_FILE=self_logger.db
set TABLE_NAME=logs

for /f "tokens=*" %%i in ('whoami') do set USERNAME=%%i
for /f "tokens=2 delims==" %%a in ('wmic os get localdatetime /format:list ^| findstr "="') do set datetime=%%a
set DATETIME=%datetime:~6,2%.%datetime:~4,2%.%datetime:~0,4% %datetime:~8,2%:%datetime:~10,2%
sqlite3 %DB_FILE% "CREATE TABLE IF NOT EXISTS %TABLE_NAME% (user TEXT, date DATETIME);"
sqlite3 %DB_FILE% "INSERT INTO %TABLE_NAME% (user, date) VALUES ('%USERNAME%', '%DATETIME%');"
set SQL_QUERY=SELECT COUNT(*) FROM %TABLE_NAME%;
for /f %%i in ('sqlite3.exe %DB_FILE% "%SQL_QUERY%"') do set ROW_COUNT=%%i

echo Имя программы: self-logger.bat
echo Количество запусков: %ROW_COUNT%
echo Дата и время: %DATETIME%

set SQL_QUERY=SELECT * FROM %TABLE_NAME%;
sqlite3.exe -header -column %DB_FILE% "%SQL_QUERY%"

endlocal