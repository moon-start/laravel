@echo off && chcp 65001

echo.
rem #############################################  set /p A="輸入專案 : "
if not  defined top (call top)
echo.
set    A=%top%
set /p B="分支 : "
echo.


cd %userprofile%\Desktop\

cd %A%


git checkout master
rem  git branch -D %B%
git push    %A%  :%B%


echo.
echo.完成!!
pause>nul