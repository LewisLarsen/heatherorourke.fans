<p align="center"> 
<img src="https://i.imgur.com/H9b44kl.png">
</p>


## About

A simple fan website for Heather O'Rourke, built with Symfony. You can view the production site at https://heatherorourke.fans. This website was built within a few hours as I wanted something to do, it is a very basic Symfony application with a few pages, the database is SQLite3 as I didn't want to faff around with MySQL for this tiny website.

This website uses the following:
- TailwindCSS
- AlpineJS
- Tippy
- HeroIcons

## Improvements

Need to improve the way it checks for Heather's birthday, the current code is quite awful and will get around to making it less poor it eventually. (As a side note, when it's her birthday, an element gets added on the homepage with her would-be age)

## Potential Features

TBA

## Installation Instructions

Clone the repo
```
git clone https://github.com/LewisLarsen/heatherorourke.fans
```

Install Composer (prod)
```
composer install
```

Install NPM
```
npm install --production
```

Build assets for good measure! (likely unnecessary but I do it nonetheless)
```
npm run build
```

Make the DB
```
doctrine:database:create
```

Build the DB Tables + insert Gallery data
```
php bin/console doctrine:migrations:migrate
```

**Please ensure that the environment in your .env is set to "prod"**

## Optional Commands
Sometimes clearing the cache is good for your soul.
```
php bin/console cache:clear --env=prod
```

## Other
Feel free to open a PR or something if you'd like, this website is largely finished but hey, I don't mind. If you need to contact me regarding this website, please either use GitHub or email [Lewis Larsen](mailto:lewis.larsen@heatherorourke.fans?subject=[GitHub]%20Heather%20Fan%20Site).
