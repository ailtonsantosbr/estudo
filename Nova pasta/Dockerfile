// Declarative //
pipeline {
	agent none
	stages {
		stage ('Back-end') {
			agent {
				docker {image 'maven:3-alpine'}
			}
			steps {
				sh 'mvn --version'
			}
		}
		stage ('front-end') {
			agent {
				docker {image 'node:7-alpine'}
			}
			steps {
				sh 'node --version'
			}
		}
	}
}
// Script //

node {
	/* requires the docker pipeline plugin to be installed */

	stage('Back-end') {
		docker.image('maven:3-alpine').inside {
			sh 'mvn --version'
		}
	}

	stage('Front-end') {
	 docker.image('node:7-alpine').inside {
	 	sh 'node --version'
	 }
	}
}