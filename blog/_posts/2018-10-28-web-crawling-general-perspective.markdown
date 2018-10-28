---
layout: post
title:  "Web Crawling General Perspective"
date:   2018-10-28 13:45:07 +0300
categories: crawl
---
Web crawler is a program that acts as an automated script which browses through the internet pages datas in a systematic way.

A web crawler gathers pages from the web and then, indexes them in a methodical and automated manner to support search engine queries. (like Xpath- Xpath functions.) Crawlers would also help in validating HTML codes and checking links as google, yandex bots etc.

These web crawlers go by different names, like bots, automatic indexers and robots. Generally, web crawlers reads web page’s robots.txt or sitemap.xml.

Some crawler portals; scrapy.org ,Octoparse
According to robots.txt or sitemap.xml, web crawler flow chart can be configured.

The web crawler follows all the hyperlinks in the websites and visits other websites as well. Each page is a new data for web crawl.

Web crawlers are configured to monitor the web regularly so the results they generate are updated and timely.


Figure: Methodology of simple crawler
Scheduler time is the most important decision of crawler mechanism. Because, Obtained data should not be multiple datasets. Every data must be an unique and meaningful. Generally, text and metadata stores on different types of databases like ravendb (Nosql), mssql, mysql etc. However, If you willing to store text and metadata locally, you can store these items on excel, xml, txt format.

What is required to do crawl ?
For storage: Database — I prefer mssql or any nosql database. / Local: xml or csv format
For scheduler/time: According to task scheduler history events. ( Approximately 2 hours per web crawler)
For multi-threaded downloader: Scrapy — Powerful server minimum 16 gb ram for dynamic performance.
For spesific rules/script: Javascript, python, C# , xpath functions
Use case of Web Crawlers
Example: E-commerce Sites
Web crawlers have become so important to big internet companies having a strong online presence & e-commerce , and they use it to obtain data like product information, reviews, pricing details and images to ensure they deliver better than what their competitors give. Web crawlers can periodically compare another companies text and meta data.
Pass Security & IP Spoofing
Some huge online sites defence their text and metadata with security team or defensive coding. If your transactions are more than the humanbeing transactions, you will be banned permanently. Some atackers uses IP spoofing methodology, IP spoofing is client IP changing each request periodically some companies provides this service. Such as; nohodo, geosurf.
Humanizing (Changing user-agent — Custom Request Delay)
Web crawlers can make requests on the web site like human use.
How ?
Changing user-agent and custom request delay according to human use average time. Also, mouse click and movement can be configured.
In conclusion 
In a world of competition all the big online web companies that started to crawl to stay on the internet. It is illegal :) to crawl from another site because every site has legal user contracts. That site may initiate legal proceedings against both natural and legal persons.
Useful links:

https://www.w3schools.com/js/js_htmldom.asp ( HTML DOM )
