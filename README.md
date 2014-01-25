php-jenkins-example
===================

Proyecto de ejemplo para PHP Jenkins


Configurar Jenkins
````bash
wget http://localhost:8080/jnlpJars/jenkins-cli.jar
java -jar jenkins-cli.jar -s http://localhost:8080 install-plugin checkstyle cloverphp dry htmlpublisher jdepend plot pmd violations xunit
java -jar jenkins-cli.jar -s http://localhost:8080 safe-restart
````

Añadir php-template

````bash
curl https://raw.github.com/sebastianbergmann/php-jenkins-template/master/config.xml | java -jar jenkins-cli.jar -s http://localhost:8080 create-job php-template
````