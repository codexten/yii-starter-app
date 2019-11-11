
# project setup

```
git clone https://github.com/codexten/yii-starter-app.git project-name/project-name-0.1
cd project-name/project-name-0.1
cp .env.dist .env
cp hidev-local.yml.dist hidev-local.yml
composer update --prefer-dist --no-progress --profile
./vendor/bin/hidev deploy
./vendor/bin/hidev app/setup
```
