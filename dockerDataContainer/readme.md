# Changing the data structure and rebuild

## createMySqlContainerForEmptyDB.sh

Loads a docker mySql image creates a root user and password and configures the container to expose port 3307 and the directory for the data is mounted to ./datstructure

## startMySqlContainerForEmptyDB.sh

Starts the previousely created container. Only needed if you already have the container from the previous step and need to start it again. Otherwise the first step already starts the container.

##Changes to the datastructure and redeployment

1. Make changes to the createTable.sql
2. Empty the contents of the datastructure directory
3. Run `./createMySqlContainerForEmtpyDB.sh`
4. Connect to the mySQL instance inside docker in import your .sql files
  1. The tables will be created in `datastructure` directory.
5. Stop the container `docker stop <ContainerID>`
  1. To see the container ID do: `docker ps` (It is the mysql image)
6. Remove the container `docker rm <ContainerID>`
7. Remove the image that holds the datastructure
  1. `docker images` to list all existing images --> We are looking for the image named: thorbux/calibcamera-datastore
  2. `docker rmi <imageID>` to remove this image
4. Run ```docker build -t thorbux/calibcamera-datastore:[versionNameTag]``` or use the buildDataStore.sh script
  * This takes the `datastructure` directory and creates a data volume container-image from it.
5. Run `docker-compose up` this creates the complete setup with all containers. You can now connect to MySQL DB to check if all your changes are there.
6. Now let us commit the new data volume container: ```docker commit calibcamera-datastore calibcamera-datastore:[versionNameTag]```
7. ```docker push thorbux/calibcamera-datastore:[versionNameTag]``` This creates a new datastore container which can be used by the docker-compose script later on.
8. Change the version name of thorbux/calib-camera-datastore in the docker-compose.yml file to match the latest version.

