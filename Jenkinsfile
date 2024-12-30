def FAILED_STAGE
pipeline {
	 agent 	any

 	environment {
        projectName = "symfony_project"
        DOCKERHUB_CREDENTIALS = credentials('firstproject-dockerhub')
    }
	stages {

		stage("clone") {

			steps {
					script {
					FAILED_STAGE=env.STAGE_NAME

					echo "cloning..." 
					git branch: 'master', credentialsId: 'b4b055a4-28f0-4cd2-bd7f-f200026bfe73', url: 'https://gitlab.com/e913/firstproject.git' 
					
					}
					
			}
	  
		}

        stage("docker") {

			steps {
				
				script {
                    /* sh 'docker build -t nourrhibi/symfonydocker:$BUILD_NUMBER .'
                    sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin' 
                     sh 'docker push nourrhibi/symfonydocker:$BUILD_NUMBER'
					sh 'docker run --network host -p 8000:8000 nourrhibi/symfonydocker:$BUILD_NUMBER'*/

					sh 'docker build -t symfony-tutorial .'
					sh 'docker run --network host -p 8000:8000 -p 888:80 symfony-tutorial' 
					sh 'docker run -d -t --network host -p 8000:8000 symfony-tutorial php bin/console server:run 0.0.0.0:8000'
					
				}
					
			}
	  
		}

		stage("prepare") {

			steps {
				
				script {

					FAILED_STAGE=env.STAGE_NAME
					echo "preparing..."
					sh 'composer install' 
					 
				}
	  
			}
		}

		stage("build") {

			steps {
				script {
					
					FAILED_STAGE=env.STAGE_NAME
					echo "building..."
                    //echo "Current workspace is ${env.WORKSPACE}"
                    //sh 'php bin/console doctrine:schema:update --force'
           			try {
                		sh 'php bin/console doctrine:database:create'
           			    } catch (err) {
                		echo err.getMessage()
            			  }
					sh 'php bin/console --no-interaction doctrine:migrations:migrate'
      					
				}
  
			}
	  
		}


		stage("push") {

			steps {
				
				script {
						
					FAILED_STAGE=env.STAGE_NAME
					echo "pushing ..."
           				try {
                				sh 'cp -R /var/lib/jenkins/workspace/test_master /var/www/html'	
           					} catch (err) {
                				echo "aleardy exists"
            					}
      			}
			}
	
		}


		stage("run") {

			steps {
				 
				script {

					FAILED_STAGE=env.STAGE_NAME
					echo "running ..."
					sh 'cd /var/www/html/test_master && symfony server:start -d'
					//sh 'cd /var/www/html/test_master && php bin/console server:start 0.0.0.0:8001'
				
				 }
					
				}
	  
			}

		/*stage("scan") {
			
			steps {
				//PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/opt/		sonarqube/sonar-scanner/bin/
					withEnv(["PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/opt/sonarqube/sonar-scanner/bin/"]) {

						 withSonarQubeEnv(installationName: 'sq1') { 
               				sh "sonar-scanner \
							 	-Dsonar.projectKey=${projectName} \
                 				-Dsonar.sources=. \
                				 -Dsonar.host.url=${env.SONAR_HOST_URL} \
                				 -Dsonar.login=${env.SONAR_AUTH_TOKEN} \
								 -Dsonar.projectName=${projectName} \
                 				-Dsonar.projectVersion=${env.BUILD_ID}"
      				     }
					}
			}

			}*/


		/*stage("Quality gate") {
           		 
			steps {

                waitForQualityGate abortPipeline: true
           	}
      	 }*/

	}


	 post{
		 
        failure{

			//echo "Failed stage name: ${FAILED_STAGE}"
			//emailext body: 'Failed stage name: ${FAILED_STAGE} \nMore Info can be found here: ${env.BUILD_URL}', subject: 'jenkins build:${currentBuild.currentResult}: ${env.JOB_NAME}', to: 'nourrhibi@gmail.com'
			mail bcc: '', body: "<b>Failed stage name: ${FAILED_STAGE}</b><br><br>Project: ${env.JOB_NAME} <br>Build Number: ${env.BUILD_NUMBER} <br> URL de build: ${env.BUILD_URL}", cc: '', charset: 'UTF-8', from: '', mimeType: 'text/html', replyTo: '',
			 subject: "ERROR CI: Project name -> ${env.JOB_NAME}", to: "nourrhibi@gmail.com";
		}
        always {

            sh 'docker logout'
        }
	 }		 

}
