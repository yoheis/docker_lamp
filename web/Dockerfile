#
# Apache + PHP
#
# 2016-12-05
#   CentOS 6.6 + epel,remi,rpmforge
#   Apache 2.2.15
#   PHP 5.4.45

FROM centos:6

# update yum
RUN yum update -y && \
    yum clean all

# epel repo
RUN yum install -y http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm && \
    yum clean all
RUN sed -i -e "s/enabled *= *1/enabled=0/g" /etc/yum.repos.d/epel.repo

# remi repo
RUN yum install -y http://rpms.famillecollet.com/enterprise/remi-release-6.rpm && \
    yum clean all
RUN sed -i -e "s/enabled *= *1/enabled=0/g" /etc/yum.repos.d/remi.repo

# httpd
RUN yum install -y httpd httpd-tools && \
    yum clean all

# libmcrypt
RUN yum install --enablerepo=epel -y libmcrypt && \
    yum clean all

# php
RUN yum install --enablerepo=remi -y php php-devel php-gd php-mbstring php-mcrypt php-mysqlnd php-pear php-xml php-opcache && \
    yum clean all

ENV WEBAPP_ROOT /webapp

ADD ./php.ini /etc/php.ini

EXPOSE 80

CMD ["/usr/sbin/httpd","-D","FOREGROUND"]
