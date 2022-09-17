# ProjektLaravel
Project to learning Laravel (and PHP). It will hand-held(with filtering of data to displaing) generator of reports from excel file (user must-by the use of a browser e.g. in the Intranet- to regiser, log in and than enters his .csv file; Next he chooses data for visualisation from columns and rows of .csv and the application will draw charts (at this moment no ready). When logging out data will lost, because my app "GENERATOR RAPORTÓW" have not a mechanismus to saving and persistenting - this is intentional - Eloquent this is whole other story :) ).
 Application must to have architecture according to MVC pattern and must to provide data security of user.
  At the beginning I made this: Installing laravel-framework and additional components (Composer);checking php version, checking enviroment path in WindowsSystem, installing composer and laravel/ui pack (there steps are described in Laravel documentacion for 7x version).

An idea from me is to download bootstrap theme with ready charts.
I had to customize Bootstraptemplates and write blade templates and
bind moving from page to page to right routing.
Next I made a script of javascript, which produces elements of html dynamicaly for right presentation of data on the site .
 My ProjectLaravel: -php version 8.0 -Laravel version 8.41.1 -Composer version 2.1.3 -laravel/ui 3.3 -npm version 6.14.13

1.01.2022 was update:
- version of Laravel (from version 8.41.1 to Laravel Framework 8.75.0 - due vulnerability  to attack CVE-2021-43808 
(https://github.com/advisories/GHSA-66hf-2p6w-jqfw)
- other fine fixes regarding vulnerability
