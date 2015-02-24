<?php defined('C5_EXECUTE') or die('Access Denied.') ?>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=PT+Sans:700,400|Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
    <?= $html->css($view->getStylesheet('main.less')) ?>
    <link href="//cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shCore.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css" rel="stylesheet" type="text/css">

    <?= Loader::element('header_required', array('pageTitle' => $pageTitle)) ?>
    <script>window.SnowDrift = {};</script>
</head>
