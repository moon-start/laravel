@echo off && chcp 65001

echo.
rem #############################################  set /p A="輸入專案 : "
if not  defined top (call top)
echo.
set    A=%top%
set /p B="分支 : "
echo.


cd %userprofile%\Desktop\
rem git clone git@github.com:moon-start/%A%.git


cd %A%
rem git checkout -b  %B% 



rem  del %B%.code-workspace
rem  setName("moon_code-workspace",SS+".code-workspace")
rem os.system('git add .')
rem os.system('git commit -m "new '+SS+'"')



rem 新增...恢復
git checkout master
git push   %A%   master:%B%
git branch -D %B%



echo.
echo.完成!!
pause>nul