FROM node:latest



WORKDIR /var/www/html/
#RUN npm install 
ENTRYPOINT [ "npm" ]
