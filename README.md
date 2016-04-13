# zend-expressive-oauth2-middleware
This is a project to work an OAuth 2 server micro service using Zend Expressive, currently is just a proof of concept and is not meant to be use in any production project

# oAuth 2 Authorization server Middleware Application
This project aims to provide a middleware for an authorization server using Expressive and the oAuth 2 server from PHP League. The main goal is to provide the authorization server implementation for any app in any framework or language.

## The problem
Every time we start a new API, we may need the authorization server in order to deny or grant access to our endpoints, usually that server sits on top of the application itself, no matter what framework you use, it could be Laravel, Symfony, Zend with Apiary or other, but  building and maintaining the oAuth server in the same codebase as your entire API is becoming less accountable usually when your API is big enough to split it in different services.

## What I want to accomplish
Nowadays we see many more Micro Service oriented architectures where many parts of the application are developed in their own separated codebases and environments, i think this is good and that is the scenario we will use for this project. Having said that, we want to build a micro service to handle authorization and authentication using the oAuth2 specification. With this micro service you should be able to have an authorization server for your API and Apps pretty fast without having to worry about it every time you start a new project.

## Disclaimer
This project is a proof of concept and is not something I want to start using for productions apps right away, i have it on github to be able to get feedback and help from different colleagues. If you use this, do it on your own.
