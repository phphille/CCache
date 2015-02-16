# CCache

## About

A very light and simple class that caches content.

    PHP 5 >= 5.3.0

## Introduction

Create an object of CCache like $cache = new \phpe\cache\CCache($aPath);

Then you can create a cache file with $cache->Put('nameOfFile', 'contentInFile');

When you want to get the content of a cache file, call $cache->Get('nameOfFile');

You can also prune an item with $cache->Prune('nameOfFile'); or prune all items with $cache->PruneAll('nameOfFile');
