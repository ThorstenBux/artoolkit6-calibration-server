docker run -p 3307:3306 --name calibcamera-mysql -e MYSQL_ROOT_PASSWORD=rootPw -d -v $(pwd)/datastructure:/var/lib/mysql mysql:5.7