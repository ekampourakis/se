# PatrasEBike
An electric bike renting platform for all residents of Patras.

# Setup
With these instructions will be able to have a copy of the project up and running in your system in no time.

## Packages
This repository contains the codebase of the whole project which is split in 3 parts.

* The desktop GUI for the companies providing their equipment. Located in the `PatrasBike` folder.
* The client web app for the users wanting to use the services. Located in the `PatrasBike-Web` folder.
* The database of the platform for the project administrators. As the self contained file `db.mysql`.

## Desktop GUI
As most companies still use Windows machines in their offices, we thought it was more convinient to create a native Windows app.
For this purpose, we used the .NET Framework 4.0 and VB.NET to create the administration app.

### Framework
(.NET Framework 4.0)[https://dotnet.microsoft.com/download/dotnet-framework/net40] comes pre-installed by default on all new Windows 10 distributions and is also easily installed on older Windows versions.

### Compiling
For developing the application, (Visual Studio)[https://visualstudio.microsoft.com/] is required. Any free or paid version is adequate for compiling and debugging the application. 
After installing the IDE, the project file `PatrasBike/PatrasBike.sln` can be loaded. You can then build the project and/or run the app.

### Distributing
After compiling, a single executable file is generated that can be distributed to the companies. Make sure to sign the certificates for the compiled app before shipping, or else Windows will most probably block the application as not secure.




## Web App
As most bikers don't usually carry a laptop with them when they ride, we decided to create mobile friendly web application for serving the platform. Although a native Android and iOS app would be more straight forward to make, the implementation and difficulty of this task rendered it out of context.

### Framework
(PHP 7)[https://www.php.net/] is used for the web app.
We recommend using (Apache 2)[https://httpd.apache.org/] on a Linux machine for serving the web pages.

### Distributing
The process is simple, you just have to put the files inside your web server's directory and run the server. Then the users have to navigate into the site using the URL you have for your server using any web browser.

## Database
We are using a (MySQL)[https://www.mysql.com/] database for storing all the information. MySQL must be installed on the server machine and be accessible from the PHP installation. The credentials and database name can be altered in the `PatrasBike-Web/config.php` file.

## Contributing
**Please follow a Git tutorial before working on this project**.
It is a very complicated and fairly large project that will make your (and others') life miserable without proper version and workflow control.

Contributions should be made on a feature branch.
You can commit and push whatever changes you wish to your branches as long as others aren't affected.
When merging to th development branch, please first discuss the change you wish to make via issue,
email, or any other method with the owners of this repository and then make a pull request.

Never, **ever** push changes to the development branch directly except you **really** know what you're doing.
Please note that we have a code of conduct and you must follow it in all your interactions with the project.
