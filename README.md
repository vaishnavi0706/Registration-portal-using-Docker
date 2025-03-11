└── project
├── docker-compose.yml
├── mysql
│   ├── data
│   └── init.sql
├── nginx
│   ├── default.conf
│   └── index.html
└── php
├── Dockerfile
└── process_form.php

    Create main directory as project
    Inside project create 3 sub directory as nginx, php, mysql
    Put all the files as per directory name
    create directory inside mysql named as data and leave it blank (afterward we are going to bind that directory as a volume)
    Open docker-compose file and check the all paths are correctly written in the file (check the spacing)
    Then build the file and hit IP to browser 
