pipeline {
    agent any
    
    stages {
        stage('Init') {
            steps {
                script {
                    echo 'Initializing...'
                    sleep(time:10,unit:"SECONDS")
                }
            }
        }
        stage('Clean') {
            steps {
                script {
                    echo 'Cleaning...'
                    sleep(time:20,unit:"SECONDS")
                }
            }
        }
        stage('Compile') {
            steps {
                script {
                    echo 'Compiling...'
                    sleep(time:25,unit:"SECONDS")
                }
            }
        }
        stage('Junit') {
            steps {
                script {
                    echo 'Junit Tests...'
                    sleep(time:13,unit:"SECONDS")
                }
            }
        }
        stage('Build') {
            steps {
                script {
                    echo 'Build Project...'
                    sleep(time:15,unit:"SECONDS")
                    
                }
            }
        }
        stage('Selenium') {
            steps {
                script {
                    echo 'Selenium Tests...'
                    sleep(time:30,unit:"SECONDS")
                }
            }
        }
        stage('Deploy Dev') {
            steps {
                script {
                    echo 'Deploy...'
                    sleep(time:10,unit:"SECONDS")
                }
            }
        }
        stage('Deploy Prod') {
            steps {
                script {
                    echo 'Deploy...'
                    sleep(time:15,unit:"SECONDS")
                }
            }
        }
    }
    
    post {
        success {
            echo 'Pipeline succeeded!'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}