## How to contribute to the project website

The website is pretty much wrapped around the game itself, meaning it reuses a lot of its assets. To keep things simple, the stable and development versions of the game are also included in this repository, but they'll each require a Node.js server.<br>
Website itself is built using HTML, CSS, Javascript, PHP and MySQL. It needs to run on a server, a local one will do just fine.

### Installing Dependencies

You'll have to install an Apache HTTP Server, like [AMPPS](http://www.ampps.com/downloads) or operating system specific ones, like [WAMP](http://wampserver.com), [MAMP](https://www.mamp.info) or [LAMP](https://turnkeylinux.org/lampstack).

### Recommended Tool

If you're not very keen on using git from the CLI, I recomment using [Git Cola](https://git-cola.github.io) for cloning the project and creating patches.

### Fork Project

You can create a clone of the project by using git from CLI or with the use of a tool, like the one recommended above.<br>
Create a folder called **AncientBeast** inside the root of your development server and browse it, the naming is important.
```
https://github.com/FreezingMoon/AncientBeast.git
```

### Create Database

Access your **phpMyAdmin**, create a database for the project and import **database.sql** file located in the project's root.

### Change Config

You'll have to configure **config.php.in** file from project root directory, update the database info and save it as **config.php**.
That file will not be tracked so it will be completely ignored from your commits, making things easier for you.
In case you're using a different path and/or name for the project's root, make sure you update **$site_root** to reflect that, or you'll end up not seeing any images on your local website.

### Next Step

You are free to browse [existing issues](https://github.com/FreezingMoon/AncientBeast/issues) and comment on the ones that you want to take a swing at in order to make sure the issue is still relevant and that nobody else is working on it. You can also drop by the project's [Discord server](https://discord.me/AncientBeast) and mention your skills and that you're interested in helping out; you'll be assigned to a specific issue. When you're done, simply create a **Pull Request**, note that you might need to pull in from master repository before doing so. Your patches will get reviewed and tested, if there are issues with them you'll receive feedback in order to make corrections, otherwise your pull request will get approved and merged into the master branch and you'll getting you credited for your work.

---
## Other ways of contributing

Coding is not the only thing required in order to make this project as awesome as possible, see the [How to Contribute](http://ancientbeast.com/contribute) guide.
