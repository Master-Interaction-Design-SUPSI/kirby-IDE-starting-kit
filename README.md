# Kriby IDE starting kit

## Environment setup

### Windows

Install [php.net](https://www.php.net/downloads.php): choose "Single Line Installer" and run it in the PowerShell terminal (copy paste the code below and press Enter, follow the instructions):

```
powershell -c "& ([ScriptBlock]::Create((irm 'https://www.php.net/include/download-instructions/windows.ps1'))) -Version 8.5"
```

Close an open again the PowerShell terminal and type:

`php -v`

If everything went well, you should see the PHP version installed.

### Mac

If you don't have [Homebrew](https://brew.sh/) already installed, install it first using the Terminal (copy paste the command below in the Treminal and press Enter to run it, follow the instructions):

```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

Then install PHP using the Terminal (same as before, copy/paste and Enter to run it):

`brew install php`

## Run the website locally

In VSCode, open the terminal, and type this to serve the current kirby website locally:

`php -S localhost:8000` 

Open the browser page to see the local server running:

[http://localhost:8000](http://localhost:8000)