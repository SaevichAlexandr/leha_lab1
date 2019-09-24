<?php

Router::getRoutes(
    'main', function () {
    MainController::createView("main");
});

Router::getRoutes(
    'study', function () {
    StudyController::createView("study");
});

Router::getRoutes(
    'photos', function () {
    PhotoController::createView("photos");
});

Router::getRoutes(
    'about', function () {
    AboutController::createView("about");
});

Router::getRoutes(
    'contact', function () {
    ContactController::createView("contact");
});

Router::getRoutes(
    'interests', function () {
    InterestsController::createView("interests");
});

Router::getRoutes(
    'test', function () {
    TestController::createView("test");
});

Router::getRoutes(
    'functest', function () {
    PhotoController::bar();
});

Router::getRoutes(
    'validation/contact', function () {
    FormValidationController::validate();
});

Router::getRoutes(
    'validation/test', function () {
    TestValidationController::validate();
});