FROM mysql:5.7

ENV MYSQL_DATABASE=test_db \
    MYSQL_ROOT_PASSWORD=toor

COPY ./db.sql /home/db.sql

#VOLUME ./db /var/lib/mysql
#RUN apt-get update && apt-get install bind9 -y

RUN mysql -uroot -ptoor test_db < /home/db.sql
