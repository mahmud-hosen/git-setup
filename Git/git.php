<?php
/* 

1) Github ssh key setup tutorial in bangla  Link:
https://www.youtube.com/watch?v=5ZxJfrH56mc

2) Tutrial Link :
https://www.youtube.com/watch?v=4KdGgGsIDeA
-------------------------------------------------

1)
This comment use local repository track folder create( .git  ) in my work dir .
or Initialized empty Git repository in  work dir .

$ git init

2.1) If we want to every project identity  will be same like mahmudhossain582@gmail.com &  mahmudhossain .
Run it -->

$ git config --global user.name "mahmud-hosen"
$ git config --global user.email "mahmudhossain582@gmail.com"


2.2)or If we want to diffrent project identity  will be diffrent like mahmudhossain582@gmail.com &  mahmudhossain .
Run it -->

$ git config user.name "mahmudhossain"
$ git config user.email "mahmudhossain582@gmail.com"



3)If we want to Which email & user name added already in git.To see that 
Run it -->
$ git config --list

4) Display clear 
Run it -->
clear

5) Unstaged file show   [ untrack file ]
Run it -->
$ git status

6.1)  Unstaged Changes to Staged Changed( will Commit)  [track file ]
Run it -->
one by one file stage 
$ git add cold.txt

6.2)All file stage 
$ git add  .
or 
$ git add --all

7.1) Commit Long way :
Run it -->
$ git commit
open other cmd page 
Type from keyboard i
Write your comment 
Enter Esc
Type :X
Enter press

7.2) Commit short way 
Run it -->  Write your comment in  "  "
$ git commit -m "kamal added"


8) All Commit show 
Run it -->
$ git log
8.1) All commit show short line 
Run it -->
$ git log --oneline


9) If any file update Follow 6 & 7 step (add & commit)

10) Version change 
Run it --> 384056c It is version number .
$ git checkout 384056c 

then Switched to branch 'master'
Run it -->
$ git checkout master

11) Difference Last stage code to 1st stage code ( Remove & Update code show)
Run it -->
$ git diff

11)  Which version update which code show 
Run it -->     f1dbc4c <--Commit number or version number
$ git show f1dbc4c



--------------------------------- Local repository connect to github  -----------------

git remote add origin git@github.com:Mahmud582/test1.git
git branch -M main
git push -u origin main



-----------------------------------------  SSH key Generate  -------------
For SSH Key Generate terminal/ Git Bash need to open this path  C:\Users\Md Mahmud 

1. ssh-keygen -t rsa -b 4096 -C "email"
2. eval $(ssh-agent -s)
3. ssh-add ~/.ssh/id_rsa
3. clip <~/.ssh/id_rsa.pub

After run above code .ssh folder will be generate this path C:\Users\Md Mahmud -

___________________________________________ Branching ____________________________________________

Master( Coffee ) ----------------------- (V 0.1 ) -----(V 0.2)-------------(Master)
Branch (Ice ) ----------------------------.^
Branch (Chocolate) ------------------------------------>^


                   _________________________ Git Concept ___________________________
__________________________________________________________________________________________________________
                                      Local                                      | Remote (GitHub,GitLab) |             
                                                                                 |                        |
_________________________________________________________________________________|________________________|
Work Directory                    Staging Area               Local Repository    |     Remote Repository  |
---------------------------------------------------------------------------------|------------------------|
    .---------->   git add ---------->                                           |                        |
                                      .-------- git commit ------->              |                        |
                                                                   .--------- git push -------->

                                                                   <----------git fatch---------.
    <---------------------------------git clone or git pull-------------------------------------.
                                                                                                   
    <------------- git diff --------->                                                   |
__________________________________________________________________________________________________________|

Difference Between ( Work Directory & Staging Area ) ---------->  
  git diff            ( Work Directory & before Staging Area ) 
  git diff --staged   ( Work Directory &  Staging Area )





Difference Between ( Work Directory & Local Repository ) -------->  git diff HEAD
Changes code add   ( Work Directory & Local Repository )  ------->  git merge
Local Repository to back  Work Directory  -----------------------> git checkout

# What is "origin" or Why we use "Origin" with git command ?
Ans:
  "origin" is a default name given to the remote repository from which a project was cloned or to which it is linked.  "origin" is a  alias for the main-remote-repository-link( https://github.com/mahmud-hosen/git-setup ) in Git

  Note: 'origin' is use just for instead of main-remote-repository-link

Example: 
    Both Command Same: 
      1) git push origin 'branch-name'
      2) git push https://github.com/mahmud-hosen/git-setup 'branch-name'


?>