# docker-web
workloads for testing basic docker migration
You will try to build a docker image and migrate the application to Docker hub (version1) and AWS ECR (version2). 

*some commands:
docker images (shows all docker images) 
docker PS (lists docker containers) 
docker pull image_name:tag (download an image. Check in your dockerhub under “explore”) 
docker run –d docker_image_name:tag (run a docker image to create a container) 
    Sample container: 

          docker pull lawrencetchop/web-app

          docker run –d –p 900:80 lawrencetchop/web-app

          browse http://localhost:900 

docker stop container_ID (replace stop with start)) 
docker build –t name_of_custom_image:tag 

Tags -> are versions of the image.... can be words (v1) or no. (1.0.0) 
