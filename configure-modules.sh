#!/bin/sh

##########################################
## starting configuration to aplication ##
##########################################

#Install modules
npm install grunt-contrib-uglify --save-dev
npm install grunt-contrib-sass --save-dev
npm install grunt-contrib-jshint --save-dev
npm install grunt-contrib-watch --save-dev

#Start all task
grunt w