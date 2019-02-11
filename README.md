# Symfony4 Web App

This is a sample responsive web app I created using Symfony4.

# Software Stack:

- Symfony4 Framework
- PHP
- Twig
- Bootstrap (Bootswatch template)
- Vagrant/VirtualBox

# Software Version:

- VirtualBox Version: 6.0.4
- Vagrant Version: 2.2.3

# Setup Guide

Install Vagrant and VirtualBox
Vagrant files are provided.
Homestead has been installed on a per project basis.

```sh
$ vagrant up
```

For production environments...

```sh
$ npm install --production
$ NODE_ENV=production node app
```

Lastly, if you like, you can (sudo) edit hosts file (/etc/hosts) to add the entry:

```sh
192.168.10.10   homestead.test
```
