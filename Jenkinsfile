pipeline {
    agent any
    
    stages {
        stage('Init') {
            steps {
                script {
                    echo 'Initializing...'
                }
            }
        }
        stage('Clean') {
            steps {
                script {
                    echo 'Cleaning...'
                }
            }
        }
        stage('Compile') {
            steps {
                script {
                    echo 'Compiling...'
                }
            }
        }
        stage('Junit') {
            steps {
                script {
                    echo 'Junit Tests...'
                }
            }
        }
        stage('Selenium') {
            steps {
                script {
                    echo 'Selenium Tests...'
                }
            }
        }
        stage('Build') {
            steps {
                script {
                    echo 'Build Project...'
                }
            }
        }
        stage('Deploy Dev') {
            steps {
                script {
                    echo 'Deploy...'
                }
            }
        }
        stage('Deploy Prod') {
            steps {
                script {
                    echo 'Deploy...'
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