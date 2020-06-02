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
